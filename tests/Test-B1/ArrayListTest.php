<?php

use PHPUnit\Framework\TestCase;

include_once 'App\B1-ListDonGian\ArrayList.php';

class ArrayListTest extends TestCase
{
    public function testAdd()
    {
        $listInteger = new ArrayList();
        $listInteger->add(1);
        $listInteger->add(2);
        $listInteger->add(3);
        $result = $listInteger->size(1);
        $expect = 3;
        $this->assertEquals( $expect, $result);
    }
}