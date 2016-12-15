Feature: Request elevator
  In order to start my elevator journey
  As guest
  I would like to request elevator to enter it

  Scenario: Request elevator waiting on the same floor
    When I press elevator button
    Then elevator door should open
