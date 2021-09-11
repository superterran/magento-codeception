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
    
    public function loginWithInvalidPassword(AcceptanceTester $I)
    {
        // write a negative login test
    }       
}