Feature: Get currencies information
  In order to get information about currencies
  As a developer
  I need to be able to request currencies with GraphQL API

  Scenario: Get an enabled currency
    Given the following currency:
      | code   | enabled |
      | EUR    | true    |
    When I send the following request:
    """
      {
        currency(code: \"EUR\") {
          code,
          enabled
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "currency": {
            "code": "EUR",
            "enabled": true
          }
        }
      }
    """

  Scenario: Get a currency that does not exist
    When I send the following request:
    """
      {
        currency(code: \"USD\") {
          code,
          enabled
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "currency": null
        }
      }
    """
