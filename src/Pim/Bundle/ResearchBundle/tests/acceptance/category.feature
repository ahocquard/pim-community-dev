Feature: Get categories information
  In order to get information about categories
  As a developer
  I need to be able to request categories with GraphQL API

  Scenario: Get a category with its parent
    Given the following locales:
      | code   | enabled |
      | en_US  | true    |
      | fr_FR  | true    |
    And the following categories:
      | code      | parent | label-fr_FR |
      | master    |        |             |
      | child     | master | FR child    |
    When I send the following request:
    """
      {
        category(code: "child") {
          code,
          parent {
            code,
            parent {
              code
            },
            labels {
              locale {
                code
              },
              value
            }
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
          "category": {
            "code": "child",
            "parent": {
              "code": "master",
              "parent": null,
              "labels": []
            },
            "labels": [
              {
                "locale": {
                  "code": "fr_FR"
                },
                "value": "FR child"
              }
            ]
          }
        }
      }
    """

  Scenario: Get a category that does not exist
    When I send the following request:
    """
      {
        category(code: "master") {
          code
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "category": null
        }
      }
    """
