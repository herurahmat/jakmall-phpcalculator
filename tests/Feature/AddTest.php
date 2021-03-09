<?php

namespace Tests\Feature;

use Jakmall\Recruitment\Calculator\Commands\AddCommand;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    protected function setUp() : void
    {
        echo $this->getName() . "\n";
    }

    public function testAdd()
    {
        $array_input=array(rand(1,100),rand(1,100));
        $calculator = new AddCommand();
        $result = $calculator->TestCaseInput($array_input);
        $real_result=$calculator->TestCaseInput($array_input);
        $this->assertEquals($real_result, $result,"AA");
    }
}
