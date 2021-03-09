<?php

namespace Tests\Feature;

use Jakmall\Recruitment\Calculator\Commands\SubtractCommand;
use PHPUnit\Framework\TestCase;

class SubtractTest extends TestCase
{
    protected function setUp(): void
    {
        echo $this->getName() . "\n";
    }

    public function testSubtract()
    {
        $array_input = array(rand(1, 100), rand(1, 100));
        $calculator = new SubtractCommand();
        $result = $calculator->TestCaseInput($array_input);
        $real_result = $calculator->TestCaseInput($array_input);
        $this->assertEquals($real_result, $result);
    }
}
