Feature: Get families information
  In order to get information about families
  As a developer
  I need to be able to request families with GraphQL API

  Scenario: Get an attribute
    Given the following attribute:
      | code    | type               | localizable | scopable  |
      | color   | pim_catalog_text   | true        | false     |
    When I send the following request:
    """
      {
        attribute(code: "color") {
          code,
          type,
          localizable,
          scopable,
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "attribute": {
            "code": "color",
            "type": "pim_catalog_text",
            "localizable": true,
            "scopable": false
          }
        }
      }
    """

  Scenario: Get an attribute that does not exist
    When I send the following request:
    """
      {
        attribute(code: "size") {
          code
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "attribute": null
        }
      }
    """
