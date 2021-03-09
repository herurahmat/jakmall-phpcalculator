<?php

namespace Tests\Feature;

use Jakmall\Recruitment\Calculator\Commands\PowerCommand;
use PHPUnit\Framework\TestCase;

class PowerTest extends TestCase
{
    protected function setUp(): void
    {
        echo $this->getName() . "\n";
    }

    public function testPower()
    {
        $array_input = array(rand(1, 100), rand(1, 100));
        $calculator = new PowerCommand();
        $result = $calculator->TestCaseInput($array_input);
        $real_result = $calculator->TestCaseInput($array_input);
        $this->assertEquals($real_result, $result);
    }
}
