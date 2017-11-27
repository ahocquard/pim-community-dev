'use strict';

/**
 * Extension to display full screen item picker to choose elements from a grid
 *
 * @author    Pierre Allard <pierre.allard@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
define(
    [
        'jquery',
        'underscore',
        'oro/translator',
        'backbone',
        'routing',
        'pim/form',
        'pim/template/common/item-picker',
        'pim/template/common/item-picker-basket',
        'oro/datagrid-builder',
        'oro/mediator',
        'pim/fetcher-registry',
        'pim/user-context',
        'oro/datafilter/product_category-filter',
        'require-context',
        'pim/menu/resizable'
    ],
    function (
        $,
        _,
        __,
        Backbone,
        Routing,
        BaseForm,
        template,
        basketTemplate,
        datagridBuilder,
        mediator,
        FetcherRegistry,
        UserContext,
        CategoryFilter,
        requireContext,
        Resizable
    ) {
        return BaseForm.extend({
            template: _.template(template),
            basketTemplate: _.template(basketTemplate),
            events: {
                'click .remove-item': 'removeItemFromBasket'
            },

            /**
             * {@inheritdoc}
             */
            initialize: function (config) {
                this.datagridModel = null;
                this.config = config.config;

                if (undefined === this.config.datagridName) {
                    throw new Error('You have to add parameter "datagridName" to the configuration of this module.');
                }

                if (undefined === this.config.categoryTreeRoute) {
                    throw new Error(
                        'You have to add parameter "categoryTreeRoute" to the configuration of this module.'
                    );
                }

                BaseForm.prototype.initialize.apply(this, arguments);
            },

            /**
             * {@inheritdoc}
             */
            configure: function () {
                this.datagrid = {
                    name: this.config.datagridName,
                    paramName: 'itemCodes'
                };

                mediator.on('datagrid:selectModel:' + this.datagrid.name, this.selectModel.bind(this));
                mediator.on('datagrid:unselectModel:' + this.datagrid.name, this.unselectModel.bind(this));
                mediator.on('datagrid_collection_set_after', this.updateChecked.bind(this));
                mediator.on('datagrid_collection_set_after', this.setDatagrid.bind(this));
                mediator.on('grid_load:complete', this.updateChecked.bind(this));
                mediator.once('column_form_listener:initialized', function onColumnListenerReady(gridName) {
                    if (!this.configured) {
                        mediator.trigger(
                            'column_form_listener:set_selectors:' + gridName,
                            { included: '#item-picker-append-field' }
                        );
                    }
                }.bind(this));

                return BaseForm.prototype.configure.apply(this, arguments);
            },

            /**
             * {@inheritdoc}
             */
            render: function () {
                if (!this.configured) {
                    return this;
                }

                this.$el.html(this.template({
                    title: __(this.config.title),
                    description: __(this.config.description),
                    locale: this.getLocale(),
                    datagridIdentifier: this.datagrid.name,
                }));

                this.renderGrid(this.datagrid);
                this.setupResizableColumn();

                return this.renderExtensions();
            },

            /**
             * Make the categories tree resizable. Because of flexbox we get the
             * rendered width of the column and use that as the minimum.
             */
            setupResizableColumn() {
                const resizableColumn = this.$('.ui-resizable-container--column');
                const originalColumnWidth = resizableColumn.outerWidth();

                Resizable.set({
                    minWidth: originalColumnWidth,
                    maxWidth: 500,
                    container: this.$('.ui-resizable-container--column-child'),
                    storageKey: 'item-picker'
                });
            },

            /**
             * {@inheritdoc}
             */
            shutdown() {
                Resizable.destroy();

                return BaseForm.prototype.shutdown.apply(this, arguments);
            },

            /**
             * Render the item grid
             */
            renderGrid: function () {
                const urlParams = {
                    alias: this.datagrid.name,
                    params: {
                        dataLocale: this.getLocale(),
                        _filter: {
                            category: { value: { categoryId: -2 }}, // -2 = all categories
                            scope: { value: this.getScope() }
                        }
                    }
                };

                /* jshint nonew: false */
                new CategoryFilter(
                    urlParams,
                    this.config.datagridName,
                    this.config.categoryTreeRoute,
                    '#item-picker-tree'
                );

                $.get(Routing.generate('pim_datagrid_load', urlParams)).done(function (response) {
                    this.$('#grid-' + this.datagrid.name).data(
                        { 'metadata': response.metadata, 'data': JSON.parse(response.data) }
                    );

                    let resolvedModules = [];
                    response.metadata.requireJSModules.concat(['oro/datagrid/pagination-input'])
                        .forEach(function(module) {
                            resolvedModules.push(requireContext(module))
                        });

                    datagridBuilder(resolvedModules);
                }.bind(this));
            },

            /**
             * Triggered by the event 'datagrid_collection_set_after' to keep a locale reference to
             * the grid model #gridCrap
             *
             * @param {Object} datagridModel
             */
            setDatagrid: function (datagridModel) {
                this.datagridModel = datagridModel;
            },

            /**
             * Triggered by the datagrid:selectModel:gridName event
             *
             * @param {Object} model
             */
            selectModel: function (model) {
                this.addItem(model.get('code'));
            },

            /**
             * Triggered by the datagrid:unselectModel:gridName event
             *
             * @param {Object} model
             */
            unselectModel: function (model) {
                this.removeItem(model.get('code'));
            },

            /**
             * Add an item to the basket
             *
             * @param {string} code
             *
             * @return this
             */
            addItem: function (code) {
                let items = this.getItems();
                items.push(code);
                items = _.uniq(items);

                this.setItems(items);

                return this;
            },

            /**
             * Remove an item from the collection
             *
             * @param {string} code
             *
             * @return this
             */
            removeItem: function (code) {
                let items = _.without(this.getItems(), code);

                this.setItems(items);

                return this;
            },

            /**
             * Get all items in the collection
             *
             * @return {Array}
             */
            getItems: function () {
                const items = $('#item-picker-append-field').val();

                return (!_.isUndefined(items) && '' !== items) ? items.split(',') : [];
            },

            /**
             * Set items
             *
             * @param {Array} itemCodes
             *
             * @return this
             */
            setItems: function (itemCodes) {
                $('#item-picker-append-field').val(itemCodes.join(','));
                this.updateBasket();

                return this;
            },

            /**
             * Update the checked rows in the grid according to the current model
             *
             * @param {Object} datagrid
             */
            updateChecked: function (datagrid) {
                if (datagrid.inputName !== this.datagrid.name) {
                    return;
                }

                const items = this.getItems();

                _.each(datagrid.models, function (row) {
                    if (_.contains(items, row.get('code'))) {
                        row.set('is_checked', true);
                    } else {
                        row.set('is_checked', null);
                    }
                }.bind(this));

                this.setItems(items);
            },

            /**
             * Remove an item from the basket (triggered by 'click .remove-item')
             *
             * @param {Event} event
             */
            removeItemFromBasket: function (event) {
                this.removeItem(event.currentTarget.dataset.itemCode);
                if (this.datagridModel) {
                    this.updateChecked(this.datagridModel);
                }
            },

            /**
             * TODO Render this more abstract with config
             * Render the basket to update its content
             */
            updateBasket: function () {
                FetcherRegistry.getFetcher('asset').fetchByIdentifiers(this.getItems())
                    .then(function (assets) {
                        this.$('.basket').html(this.basketTemplate({
                            items: assets,
                            thumbnailFilter: 'thumbnail',
                            scope: this.getScope(),
                            locale: this.getLocale(),
                            title: __('pim_enrich.form.basket.title'),
                            emptyLabel: __('pim_enrich.form.basket.empty_basket'),
                        }));

                        this.delegateEvents();
                    }.bind(this));
            },

            /**
             * Get the current locale
             *
             * @return {string}
             */
            getLocale: function () {
                return UserContext.get('catalogLocale');
            },

            /**
             * Get the current scope
             *
             * @return {string}
             */
            getScope: function () {
                return UserContext.get('catalogScope');
            }
        });
    }
);
