<?php 

use PHPUnit\Framework\TestCase;
include_once(__DIR__.'/../app/functions.php');

class SampleTest extends TestCase{
    public function testTrueReturn(){
        $output = true;
        $this->assertTrue($output);
    }

    public function testAdd(){
        $num1 = 1;
        $num2 = 2;
        $result = add($num1, $num2);
        $this->assertEquals($result,3);

        $num1 = 5;
        $num2 = 3;
        $result = add($num1, $num2);
        $this->assertEquals($result,8);
    }

    public function testCompare(){
        $result = compare('apple');
        $this->assertEquals($result,true);

        $result = compare('hello');
        $this->assertEquals($result,true);
    }


}


?>