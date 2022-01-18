<?php

use PHPUnit\Framework\TestCase;

include_once 'App\B3-MethodOfArray\MyList.php';

class MyListTest extends TestCase
{
    public function testMyList()
    {
        $test = new MyList(5);
        $test->add(2);
        $test->add(4);
        $test->add(5);
        $test->add(1);
        $test->add(3);

        $a = $test->sort();
        $expect = [1,2,3,4,5];
        $this->assertEquals($expect, $a);


    }
}