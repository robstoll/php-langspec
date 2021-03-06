--TEST--
PHP Spec test generated from ./expressions/general/associativity.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

$a = 10; $b = 5; $c = 3;

echo '$a + $b - $c   = '.($a + $b - $c)."\n";
echo '($a + $b) - $c = '.(($a + $b) - $c)."\n";
echo '$a + ($b - $c) = '.($a + ($b - $c))."\n";
--EXPECT--
$a + $b - $c   = 12
($a + $b) - $c = 12
$a + ($b - $c) = 12