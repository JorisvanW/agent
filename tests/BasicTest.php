<?php

require 'vendor/mobiledetect/mobiledetectlib/tests/BasicsTest.php';

use JorisvanW\Agent\Agent;

class BasicTestExtended extends BasicTest
{
    /**
     * @var Mobile_Detect
     */
    protected $detect;

    public function setUp()
    {
        $this->detect = new Agent;
    }
}
