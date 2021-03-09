<?php

namespace Tests\Feature;

use Jakmall\Recruitment\Calculator\Commands\MultiplyCommand;
use PHPUnit\Framework\TestCase;

class MultiplyTest extends TestCase
{
    protected function setUp(): void
    {
        echo $this->getName() . "\n";
    }

    public function testMultiply()
    {
        $array_input = array(rand(1, 100), rand(1, 100));
        $calculator = new MultiplyCommand();
        $result = $calculator->TestCaseInput($array_input);
        $real_result = $calculator->TestCaseInput($array_input);
        $this->assertEquals($real_result, $result);
    }
}
