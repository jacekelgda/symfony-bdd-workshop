<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Domain\UseCase\OrderElevator;
use Domain\Aggregate\ElevatorRequest;

class FeatureContext implements SnippetAcceptingContext, OrderElevator\Responder
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
        $command = new OrderElevator\Command();
        $command->floorNumber = 0;
        $useCase = new OrderElevator($command, $this);
    }

    /**
     * @Then elevator door should open
     */
    public function elevatorDoorShouldOpen()
    {
        throw new PendingException();
    }

    public function elevatorOrdered(ElevatorRequest $elevatorRequest)
    {
        return true;
    }
}
