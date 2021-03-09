<?php

namespace Tests\Feature;

use Jakmall\Recruitment\Calculator\Commands\DivideCommand;
use PHPUnit\Framework\TestCase;

class DivideTest extends TestCase
{
    protected function setUp() : void
    {
        echo $this->getName() . "\n";
    }

    public function testDivide()
    {
        $array_input = array(rand(1, 100), rand(1, 100));
        $calculator = new DivideCommand();
        $result = $calculator->TestCaseInput($array_input);
        $real_result = $calculator->TestCaseInput($array_input);
        $this->assertEquals($real_result, $result);
    }
}
