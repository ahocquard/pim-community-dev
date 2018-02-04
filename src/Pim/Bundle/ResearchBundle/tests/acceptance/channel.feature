Feature: Get channel information
  In order to get information about channels
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

  Scenario: Get a channel with locales and currencies
    Given the following channels:
      | code      | locales     | currencies | label-fr_FR     | label-en_US     |
      | ecommerce | fr_FR,en_US | EUR,USD    | FR ecommerce | US ecommerce |
    When I send the following request:
    """
      {
        channel(code: "ecommerce") {
          code,
          locales {
            code
          },
          currencies {
            code
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
          "channel": {
            "code": "ecommerce",
            "locales": [
              {
                "code": "en_US"
              },
              {
                "code": "fr_FR"
              }
            ],
            "currencies": [
              {
                "code": "EUR"
              },
              {
                "code": "USD"
              }
            ],
            "labels": [
              {
                "locale": {
                  "code": "fr_FR"
                },
                "value": "FR ecommerce"
              },
              {
                "locale": {
                  "code": "en_US"
                },
                "value": "US ecommerce"
              }
            ]
          }
        }
      }
    """

  Scenario: Get a channel without locale, currency and label
    Given the following channels:
      | code      |
      | ecommerce |
    When I send the following request:
    """
      {
        channel(code: "ecommerce") {
          code,
          locales {
            code
          },
          currencies {
            code
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
          "channel": {
            "code": "ecommerce",
            "locales": [],
            "currencies": [],
            "labels": []
          }
        }
      }
    """

  Scenario: Get a channel that does not exist
    When I send the following request:
    """
      {
        channel(code: "print") {
          code
        }
      }
    """
    Then I get the following response:
    """
      {
        "data": {
          "channel": null
        }
      }
    """
