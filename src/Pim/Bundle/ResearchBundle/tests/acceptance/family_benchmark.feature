Feature: Export quickly family informations with GraphQL
  In order to benchmark GraphQL API
  As a developer
  I need to export quickly families

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
    And 100 attributes

  Scenario: Export several families quickly
    Given 100 families with 100 attributes
    When I send the following request:
    """
      {
        families(codes: [
          "family_1",
          "family_2",
          "family_3",
          "family_4",
          "family_5",
          "family_6",
          "family_7",
          "family_8",
          "family_9",
          "family_10",
          "family_11",
          "family_12",
          "family_13",
          "family_14",
          "family_15",
          "family_16",
          "family_17",
          "family_18",
          "family_19",
          "family_20",
          "family_21",
          "family_22",
          "family_23",
          "family_24",
          "family_25",
          "family_26",
          "family_27",
          "family_28",
          "family_29",
          "family_30",
          "family_31",
          "family_32",
          "family_33",
          "family_34",
          "family_35",
          "family_36",
          "family_37",
          "family_38",
          "family_39",
          "family_40",
          "family_41",
          "family_42",
          "family_43",
          "family_44",
          "family_45",
          "family_46",
          "family_47",
          "family_48",
          "family_49",
          "family_50",
          "family_51",
          "family_52",
          "family_53",
          "family_54",
          "family_55",
          "family_56",
          "family_57",
          "family_58",
          "family_59",
          "family_60",
          "family_61",
          "family_62",
          "family_63",
          "family_64",
          "family_65",
          "family_66",
          "family_67",
          "family_68",
          "family_69",
          "family_70",
          "family_71",
          "family_72",
          "family_73",
          "family_74",
          "family_75",
          "family_76",
          "family_77",
          "family_78",
          "family_79",
          "family_80",
          "family_81",
          "family_82",
          "family_83",
          "family_84",
          "family_85",
          "family_86",
          "family_87",
          "family_88",
          "family_89",
          "family_90",
          "family_91",
          "family_92",
          "family_93",
          "family_94",
          "family_95",
          "family_96",
          "family_97",
          "family_98",
          "family_99",
          "family_100"
        ]) {
          code
        }
      }
    """
    Then I should get the response in less than 400 ms
