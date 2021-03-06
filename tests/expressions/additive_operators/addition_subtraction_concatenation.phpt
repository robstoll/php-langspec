--TEST--
PHP Spec test generated from ./expressions/additive_operators/addition_subtraction_concatenation.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

$oper = array(0, -10, 100, -3.4e10, INF, -INF, NAN, TRUE, FALSE, NULL,
	"123", "2e+5", "", "abc", PHP_INT_MAX );
/*
foreach ($oper as $e1)
{
	foreach ($oper as $e2)
	{
		echo ">$e1< + >$e2<, result: "; var_dump($e1 + $e2);
	}
	echo "-------------------------------------\n";
}
*/
/*
foreach ($oper as $e1)
{
	foreach ($oper as $e2)
	{
		echo ">$e1< - >$e2<, result: "; var_dump($e1 - $e2);
	}
	echo "-------------------------------------\n";
}
*/
///*
foreach ($oper as $e1)
{
	foreach ($oper as $e2)
	{
		echo ">$e1< . >$e2<, result: "; var_dump($e1 . $e2);
	}
	echo "-------------------------------------\n";
}
//*/

var_dump(10 + 5 . 12 . 100 - 50);
var_dump((((10 + 5) . 12) . 100) - 50);
--EXPECT--
>0< . >0<, result: string(2) "00"
>0< . >-10<, result: string(4) "0-10"
>0< . >100<, result: string(4) "0100"
>0< . >-34000000000<, result: string(13) "0-34000000000"
>0< . >INF<, result: string(4) "0INF"
>0< . >-INF<, result: string(5) "0-INF"
>0< . >NAN<, result: string(4) "0NAN"
>0< . >1<, result: string(2) "01"
>0< . ><, result: string(1) "0"
>0< . ><, result: string(1) "0"
>0< . >123<, result: string(4) "0123"
>0< . >2e+5<, result: string(5) "02e+5"
>0< . ><, result: string(1) "0"
>0< . >abc<, result: string(4) "0abc"
>0< . >9223372036854775807<, result: string(20) "09223372036854775807"
-------------------------------------
>-10< . >0<, result: string(4) "-100"
>-10< . >-10<, result: string(6) "-10-10"
>-10< . >100<, result: string(6) "-10100"
>-10< . >-34000000000<, result: string(15) "-10-34000000000"
>-10< . >INF<, result: string(6) "-10INF"
>-10< . >-INF<, result: string(7) "-10-INF"
>-10< . >NAN<, result: string(6) "-10NAN"
>-10< . >1<, result: string(4) "-101"
>-10< . ><, result: string(3) "-10"
>-10< . ><, result: string(3) "-10"
>-10< . >123<, result: string(6) "-10123"
>-10< . >2e+5<, result: string(7) "-102e+5"
>-10< . ><, result: string(3) "-10"
>-10< . >abc<, result: string(6) "-10abc"
>-10< . >9223372036854775807<, result: string(22) "-109223372036854775807"
-------------------------------------
>100< . >0<, result: string(4) "1000"
>100< . >-10<, result: string(6) "100-10"
>100< . >100<, result: string(6) "100100"
>100< . >-34000000000<, result: string(15) "100-34000000000"
>100< . >INF<, result: string(6) "100INF"
>100< . >-INF<, result: string(7) "100-INF"
>100< . >NAN<, result: string(6) "100NAN"
>100< . >1<, result: string(4) "1001"
>100< . ><, result: string(3) "100"
>100< . ><, result: string(3) "100"
>100< . >123<, result: string(6) "100123"
>100< . >2e+5<, result: string(7) "1002e+5"
>100< . ><, result: string(3) "100"
>100< . >abc<, result: string(6) "100abc"
>100< . >9223372036854775807<, result: string(22) "1009223372036854775807"
-------------------------------------
>-34000000000< . >0<, result: string(13) "-340000000000"
>-34000000000< . >-10<, result: string(15) "-34000000000-10"
>-34000000000< . >100<, result: string(15) "-34000000000100"
>-34000000000< . >-34000000000<, result: string(24) "-34000000000-34000000000"
>-34000000000< . >INF<, result: string(15) "-34000000000INF"
>-34000000000< . >-INF<, result: string(16) "-34000000000-INF"
>-34000000000< . >NAN<, result: string(15) "-34000000000NAN"
>-34000000000< . >1<, result: string(13) "-340000000001"
>-34000000000< . ><, result: string(12) "-34000000000"
>-34000000000< . ><, result: string(12) "-34000000000"
>-34000000000< . >123<, result: string(15) "-34000000000123"
>-34000000000< . >2e+5<, result: string(16) "-340000000002e+5"
>-34000000000< . ><, result: string(12) "-34000000000"
>-34000000000< . >abc<, result: string(15) "-34000000000abc"
>-34000000000< . >9223372036854775807<, result: string(31) "-340000000009223372036854775807"
-------------------------------------
>INF< . >0<, result: string(4) "INF0"
>INF< . >-10<, result: string(6) "INF-10"
>INF< . >100<, result: string(6) "INF100"
>INF< . >-34000000000<, result: string(15) "INF-34000000000"
>INF< . >INF<, result: string(6) "INFINF"
>INF< . >-INF<, result: string(7) "INF-INF"
>INF< . >NAN<, result: string(6) "INFNAN"
>INF< . >1<, result: string(4) "INF1"
>INF< . ><, result: string(3) "INF"
>INF< . ><, result: string(3) "INF"
>INF< . >123<, result: string(6) "INF123"
>INF< . >2e+5<, result: string(7) "INF2e+5"
>INF< . ><, result: string(3) "INF"
>INF< . >abc<, result: string(6) "INFabc"
>INF< . >9223372036854775807<, result: string(22) "INF9223372036854775807"
-------------------------------------
>-INF< . >0<, result: string(5) "-INF0"
>-INF< . >-10<, result: string(7) "-INF-10"
>-INF< . >100<, result: string(7) "-INF100"
>-INF< . >-34000000000<, result: string(16) "-INF-34000000000"
>-INF< . >INF<, result: string(7) "-INFINF"
>-INF< . >-INF<, result: string(8) "-INF-INF"
>-INF< . >NAN<, result: string(7) "-INFNAN"
>-INF< . >1<, result: string(5) "-INF1"
>-INF< . ><, result: string(4) "-INF"
>-INF< . ><, result: string(4) "-INF"
>-INF< . >123<, result: string(7) "-INF123"
>-INF< . >2e+5<, result: string(8) "-INF2e+5"
>-INF< . ><, result: string(4) "-INF"
>-INF< . >abc<, result: string(7) "-INFabc"
>-INF< . >9223372036854775807<, result: string(23) "-INF9223372036854775807"
-------------------------------------
>NAN< . >0<, result: string(4) "NAN0"
>NAN< . >-10<, result: string(6) "NAN-10"
>NAN< . >100<, result: string(6) "NAN100"
>NAN< . >-34000000000<, result: string(15) "NAN-34000000000"
>NAN< . >INF<, result: string(6) "NANINF"
>NAN< . >-INF<, result: string(7) "NAN-INF"
>NAN< . >NAN<, result: string(6) "NANNAN"
>NAN< . >1<, result: string(4) "NAN1"
>NAN< . ><, result: string(3) "NAN"
>NAN< . ><, result: string(3) "NAN"
>NAN< . >123<, result: string(6) "NAN123"
>NAN< . >2e+5<, result: string(7) "NAN2e+5"
>NAN< . ><, result: string(3) "NAN"
>NAN< . >abc<, result: string(6) "NANabc"
>NAN< . >9223372036854775807<, result: string(22) "NAN9223372036854775807"
-------------------------------------
>1< . >0<, result: string(2) "10"
>1< . >-10<, result: string(4) "1-10"
>1< . >100<, result: string(4) "1100"
>1< . >-34000000000<, result: string(13) "1-34000000000"
>1< . >INF<, result: string(4) "1INF"
>1< . >-INF<, result: string(5) "1-INF"
>1< . >NAN<, result: string(4) "1NAN"
>1< . >1<, result: string(2) "11"
>1< . ><, result: string(1) "1"
>1< . ><, result: string(1) "1"
>1< . >123<, result: string(4) "1123"
>1< . >2e+5<, result: string(5) "12e+5"
>1< . ><, result: string(1) "1"
>1< . >abc<, result: string(4) "1abc"
>1< . >9223372036854775807<, result: string(20) "19223372036854775807"
-------------------------------------
>< . >0<, result: string(1) "0"
>< . >-10<, result: string(3) "-10"
>< . >100<, result: string(3) "100"
>< . >-34000000000<, result: string(12) "-34000000000"
>< . >INF<, result: string(3) "INF"
>< . >-INF<, result: string(4) "-INF"
>< . >NAN<, result: string(3) "NAN"
>< . >1<, result: string(1) "1"
>< . ><, result: string(0) ""
>< . ><, result: string(0) ""
>< . >123<, result: string(3) "123"
>< . >2e+5<, result: string(4) "2e+5"
>< . ><, result: string(0) ""
>< . >abc<, result: string(3) "abc"
>< . >9223372036854775807<, result: string(19) "9223372036854775807"
-------------------------------------
>< . >0<, result: string(1) "0"
>< . >-10<, result: string(3) "-10"
>< . >100<, result: string(3) "100"
>< . >-34000000000<, result: string(12) "-34000000000"
>< . >INF<, result: string(3) "INF"
>< . >-INF<, result: string(4) "-INF"
>< . >NAN<, result: string(3) "NAN"
>< . >1<, result: string(1) "1"
>< . ><, result: string(0) ""
>< . ><, result: string(0) ""
>< . >123<, result: string(3) "123"
>< . >2e+5<, result: string(4) "2e+5"
>< . ><, result: string(0) ""
>< . >abc<, result: string(3) "abc"
>< . >9223372036854775807<, result: string(19) "9223372036854775807"
-------------------------------------
>123< . >0<, result: string(4) "1230"
>123< . >-10<, result: string(6) "123-10"
>123< . >100<, result: string(6) "123100"
>123< . >-34000000000<, result: string(15) "123-34000000000"
>123< . >INF<, result: string(6) "123INF"
>123< . >-INF<, result: string(7) "123-INF"
>123< . >NAN<, result: string(6) "123NAN"
>123< . >1<, result: string(4) "1231"
>123< . ><, result: string(3) "123"
>123< . ><, result: string(3) "123"
>123< . >123<, result: string(6) "123123"
>123< . >2e+5<, result: string(7) "1232e+5"
>123< . ><, result: string(3) "123"
>123< . >abc<, result: string(6) "123abc"
>123< . >9223372036854775807<, result: string(22) "1239223372036854775807"
-------------------------------------
>2e+5< . >0<, result: string(5) "2e+50"
>2e+5< . >-10<, result: string(7) "2e+5-10"
>2e+5< . >100<, result: string(7) "2e+5100"
>2e+5< . >-34000000000<, result: string(16) "2e+5-34000000000"
>2e+5< . >INF<, result: string(7) "2e+5INF"
>2e+5< . >-INF<, result: string(8) "2e+5-INF"
>2e+5< . >NAN<, result: string(7) "2e+5NAN"
>2e+5< . >1<, result: string(5) "2e+51"
>2e+5< . ><, result: string(4) "2e+5"
>2e+5< . ><, result: string(4) "2e+5"
>2e+5< . >123<, result: string(7) "2e+5123"
>2e+5< . >2e+5<, result: string(8) "2e+52e+5"
>2e+5< . ><, result: string(4) "2e+5"
>2e+5< . >abc<, result: string(7) "2e+5abc"
>2e+5< . >9223372036854775807<, result: string(23) "2e+59223372036854775807"
-------------------------------------
>< . >0<, result: string(1) "0"
>< . >-10<, result: string(3) "-10"
>< . >100<, result: string(3) "100"
>< . >-34000000000<, result: string(12) "-34000000000"
>< . >INF<, result: string(3) "INF"
>< . >-INF<, result: string(4) "-INF"
>< . >NAN<, result: string(3) "NAN"
>< . >1<, result: string(1) "1"
>< . ><, result: string(0) ""
>< . ><, result: string(0) ""
>< . >123<, result: string(3) "123"
>< . >2e+5<, result: string(4) "2e+5"
>< . ><, result: string(0) ""
>< . >abc<, result: string(3) "abc"
>< . >9223372036854775807<, result: string(19) "9223372036854775807"
-------------------------------------
>abc< . >0<, result: string(4) "abc0"
>abc< . >-10<, result: string(6) "abc-10"
>abc< . >100<, result: string(6) "abc100"
>abc< . >-34000000000<, result: string(15) "abc-34000000000"
>abc< . >INF<, result: string(6) "abcINF"
>abc< . >-INF<, result: string(7) "abc-INF"
>abc< . >NAN<, result: string(6) "abcNAN"
>abc< . >1<, result: string(4) "abc1"
>abc< . ><, result: string(3) "abc"
>abc< . ><, result: string(3) "abc"
>abc< . >123<, result: string(6) "abc123"
>abc< . >2e+5<, result: string(7) "abc2e+5"
>abc< . ><, result: string(3) "abc"
>abc< . >abc<, result: string(6) "abcabc"
>abc< . >9223372036854775807<, result: string(22) "abc9223372036854775807"
-------------------------------------
>9223372036854775807< . >0<, result: string(20) "92233720368547758070"
>9223372036854775807< . >-10<, result: string(22) "9223372036854775807-10"
>9223372036854775807< . >100<, result: string(22) "9223372036854775807100"
>9223372036854775807< . >-34000000000<, result: string(31) "9223372036854775807-34000000000"
>9223372036854775807< . >INF<, result: string(22) "9223372036854775807INF"
>9223372036854775807< . >-INF<, result: string(23) "9223372036854775807-INF"
>9223372036854775807< . >NAN<, result: string(22) "9223372036854775807NAN"
>9223372036854775807< . >1<, result: string(20) "92233720368547758071"
>9223372036854775807< . ><, result: string(19) "9223372036854775807"
>9223372036854775807< . ><, result: string(19) "9223372036854775807"
>9223372036854775807< . >123<, result: string(22) "9223372036854775807123"
>9223372036854775807< . >2e+5<, result: string(23) "92233720368547758072e+5"
>9223372036854775807< . ><, result: string(19) "9223372036854775807"
>9223372036854775807< . >abc<, result: string(22) "9223372036854775807abc"
>9223372036854775807< . >9223372036854775807<, result: string(38) "92233720368547758079223372036854775807"
-------------------------------------
int(1512050)
int(1512050)