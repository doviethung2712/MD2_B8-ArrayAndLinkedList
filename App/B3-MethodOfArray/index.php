<?php
include_once 'MyList.php';

$test = new MyList(5);
$test->add(2);
$test->add(4);
$test->add(5);
$test->add(1);

print_r($test->reset());