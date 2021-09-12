<?php
class LoginCest 
{    
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function amOnSubDomain(AcceptanceTester $I)
    {
        // write a positive login test 
        $I->amOnSubdomain("app.codeception.test");
    }
    
    public function proceedPastWarning(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('Advanced');
        $I->click("Proceed to app.codeception.test (unsafe)");
        $I->click("Create an Account");
        $I->click("Sign Up for Newsletter");
     
    }
    
    public function createAnAccount(AcceptanceTester $I)
    {
        

        // $I->submitForm('#signup', ['username' => 'MilesDavis', 'email' => 'miles@davis.com']);
        // $I->see('Thank you for Signing Up!');
        // $I->seeEmailSent('miles@davis.com', 'Thank you for registration');
        // $I->seeInDatabase('users', ['email' => 'miles@davis.com']);

    }

}