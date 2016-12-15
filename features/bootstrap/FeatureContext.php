<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class FeatureContext implements SnippetAcceptingContext
{
    /**
     * Initializes context.
     */
    public function __construct()
    {
    }

    /**
     * @When I press elevator button
     */
    public function iPressElevatorButton()
    {
        throw new PendingException();
    }

    /**
     * @Then elevator door should open
     */
    public function elevatorDoorShouldOpen()
    {
        throw new PendingException();
    }
}
