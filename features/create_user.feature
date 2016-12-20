Feature: Create user
    In order to build user base
    As admin
    I should be able to create user

    Background:
        Given I am admin user

    Scenario: Auto generating password
        When I create user with username "john"
        Then user "john" should have automatically generated password
