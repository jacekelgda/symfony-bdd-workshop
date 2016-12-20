<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I am admin user
     */
    public function iAmAdminUser()
    {
        $adminUser = AdminUser::create('admin');
    }

    /**
     * @When I create user with username :arg1
     */
    public function iCreateUserWithUsername($username)
    {
        $user = User::create($username);
    }

    /**
     * @Then user :arg1 should have automatically generated password
     */
    public function userShouldHaveAutomaticallyGeneratedPassword($username)
    {
        $user = Users::getUser($username);
    }
}
