<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Source\Model\User;
use Source\Model\AdminUser;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{

    /**
     * @Given I am admin user
     */
    public function iAmAdminUser()
    {
        $adminUser = new AdminUser('admin');
    }

    /**
     * @When I create user with username :arg1
     */
    public function iCreateUserWithUsername($username)
    {
        $user = new User($username);
    }

    /**
     * @Then user :arg1 should have automatically generated password
     */
    public function userShouldHaveAutomaticallyGeneratedPassword($username)
    {
        $users = new Users();
        $user = $users->findUser($username);
        if (!$user->isPasswordSet()) {
            throw new \Exception('User has no password');
        }
    }
}
