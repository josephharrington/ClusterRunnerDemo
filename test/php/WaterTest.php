<?php

$PROJECT_ROOT = dirname(dirname(__DIR__));
require_once("$PROJECT_ROOT/src/php/AwesomeCalculator.php");


/**
 * Class CalculatorSimpleTest
 *
 * This class contains several simple passing tests.
 */
class WaterTest extends PHPUnit_Framework_TestCase
{
    public function testSimpleAddition()
    {
        sleep(18);
        $this->assertTrue(True);
        $this->assertTrue(True);
        $this->assertTrue(True);
    }
}
