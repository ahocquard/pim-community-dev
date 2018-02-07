Feature: Get families information
  In order to get information about families
  As a developer
  I need to be able to request families with GraphQL API

  Background:
    Given the following locales:
      | code   | enabled |
      | en_US  | true    |
      | fr_FR  | true    |
    Given the following currencies:
      | code | enabled |
      | EUR  | true    |
      | USD  | true    |
    Given the following channels:
      | code      | locales     | currencies |
      | ecommerce | fr_FR,en_US | EUR,USD    |
      | tablet    | fr_FR,en_US | EUR,USD    |
    And the following attributes:
      | code    | type               |
      | color   | pim_catalog_text   |
      | name    | pim_catalog_text   |
      | image   | pim_catalog_image  |
      | size    | pim_catalog_number |

  Scenario: Get a family with attributes, attribute as label, attribute as image, requirements and labels
    Given the following family:
      | code    | attribute_as_label  | attribute_as_image  | attributes             | requirements-tablet | requirements-ecommerce | label-en_US | label-fr_FR | created                   | updated                   |
      | tshirt  | name                | image               | name,image,color,size  | name,image          | color,size             | FR tshirt   | US tshirt   | 2017-05-07T00:00:00+00:00 | 2017-05-08T00:00:00+00:00 |
    When I send the following request:
    """
      {
        family(code: "tshirt") {
          code,
          created,
          updated,
          attributes {
            code,
            type
          },
          attribute_as_label {
            code,
            type
          },
          attribute_as_image {
            code,
            type
          },
          attribute_requirements {
            channel {
              code
            },
            attributes {
              code
            },
          },
          labels {
            locale {
              code
            },
            value
          }
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "family": {
            "code": "tshirt",
            "created": "2017-05-07T02:00:00+0200",
            "updated": "2017-05-08T02:00:00+0200",
            "attributes": [
              {
                "code": "color",
                "type": "pim_catalog_text"
              },
              {
                "code": "image",
                "type": "pim_catalog_image"
              },
              {
                "code": "name",
                "type": "pim_catalog_text"
              },
              {
                "code": "size",
                "type": "pim_catalog_number"
              }
            ],
            "attribute_as_label": {
              "code": "name",
              "type": "pim_catalog_text"
            },
            "attribute_as_image": {
              "code": "image",
              "type": "pim_catalog_image"
            },
            "attribute_requirements": [
              {
                "channel": {
                  "code": "ecommerce"
                },
                "attributes": [
                  {
                    "code": "color"
                  },
                  {
                    "code": "size"
                  }
                ]
              },
              {
                "channel": {
                  "code": "tablet"
                },
                "attributes": [
                  {
                    "code": "image"
                  },
                  {
                    "code": "name"
                  }
                ]
              }
            ],
            "labels": [
              {
                "locale": {
                  "code": "en_US"
                },
                "value": "FR tshirt"
              },
              {
                "locale": {
                  "code": "fr_FR"
                },
                "value": "US tshirt"
              }
            ]
          }
        }
      }
    """

  Scenario: Get a family without attribute, attribute as label, attribute as image, requirement and label
    Given the following family:
      | code    | created                   | updated                   |
      | tshirt  | 2017-05-07T00:00:00+00:00 | 2017-05-08T00:00:00+00:00 |
    When I send the following request:
    """
      {
        family(code: "tshirt") {
          code,
          attributes {
            code,
            type
          },
          attribute_as_label {
            code,
            type
          },
          attribute_as_image {
            code,
            type
          },
          attribute_requirements {
            channel {
              code
            },
            attributes {
              code
            },
          },
          labels {
            locale {
              code
            },
            value
          }
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "family": {
            "code": "tshirt",
            "attributes": [],
            "attribute_as_label": null,
            "attribute_as_image": null,
            "attribute_requirements": [],
            "labels": []
          }
        }
      }
    """

  Scenario: Get a family that does not exist
    When I send the following request:
    """
      {
        family(code: "computer") {
          code
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "family": null
        }
      }
    """

  Scenario: Get several families
    Given the following family:
      | code      | attribute_as_label  | created                   | updated                   |
      | tshirt    | name                | 2017-05-07T00:00:00+00:00 | 2017-05-08T00:00:00+00:00 |
      | computer  | name                | 2017-05-07T00:00:00+00:00 | 2017-05-08T00:00:00+00:00 |
    When I send the following request:
    """
      {
        families(codes: ["tshirt", "computer"]) {
          code
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "families": [
            {
              "code": "computer"
            },
            {
              "code": "tshirt"
            }
          ]
        }
      }
    """
