Feature: Get locales information
  In order to get information about locales
  As a developer
  I need to be able to request locales with GraphQL API

  Scenario: Get an enabled locale
    Given the following locale:
      | code   | enabled |
      | en_US  | true    |
    When I send the following request:
    """
      {
        locale(code: "en_US") {
          code,
          enabled
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "locale": {
            "code": "en_US",
            "enabled": true
          }
        }
      }
    """

  Scenario: Get a locale that does not exist
    When I send the following request:
    """
      {
        locale(code: "de_DE") {
          code,
          enabled
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "locale": null
        }
      }
    """
