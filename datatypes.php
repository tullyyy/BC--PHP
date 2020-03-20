<?php
$a = '123 New york';
$f = 'New 123 york';
$b = '123.6 Euro';

var_dump($a); // string(12) "123 New york"
echo '<br>';
var_dump(intval($a)); //int(123) 
echo '<br>';
var_dump(intval($f)); //int(0) 
echo '<br>';

$c = 12;

var_dump($c == 12); //true
echo '<br>';
var_dump($c == '12'); //true
echo '<br>';
var_dump($c === '12'); //false
echo '<br>';


var_dump('12'); // string(2) "12" 
echo '<br>';
var_dump((integer) '12'); //int(12)
echo '<br>';
echo "------------\n";

$d = '12';
$e = (integer)$d;
echo '<br>';
var_dump($d); //string(2) "12"
echo '<br>';
var_dump($e);//int(12)
echo '<br>';


var_dump((integer)null); //int(0)
echo '<br>';
var_dump(0 == null); //bool(true)

$year = 1415;
$place = 'Azincourt';
 
$quote = "In the year {$year} a battle of {$place} was fought.";
//$quote = "In the year " . getMeCurrentYear . " a battle of {$place} was fought.";
echo '<br>';
echo "------------\n";
echo '<br>';


$array_a = [1,2,3];

$array_b = [
  'a' => 1,
  'b' => 2,
  'c' => 3,
];

var_dump($array_a[0]); // int(1)
echo '<br>';
var_dump($array_b['a']); // int(1)
echo '<br>';
echo "------------\n";
echo '<br>';

$array_c = [1,2,3];

$array_c[] = 'New Value1';
$array_c[] = 'New Value2';
$array_c[] = 'New Value3';

var_dump($array_c); //array(6) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> string(10) "New Value1" [4]=> string(10) "New Value2" [5]=> string(10) "New Value3" }

echo '<br>';
echo "------------\n";
echo '<br>';


foreach($array_c as $value) {
  var_dump($value);
} // int(1) int(2) int(3) string(10) "New Value1" string(10) "New Value2" string(10) "New Value3"


echo '<br>';
echo "------------\n";
echo '<br>';

foreach($array_c as $key => $value) {
  echo $key . ":" . $value . "\n";
} // 0:1 1:2 2:3 3:New Value1 4:New Value2 5:New Value3


echo '<br>';
echo "------------\n";
echo '<br>';


$array_d = [
    'a' => 1,
    'b' => "hi there",
    'c' => true,
    'd' => null,
];

foreach($array_d as $key => $value) {
  echo $key . ":" . $value . "\n";
} // a:1 b:hi there c:1 d:

echo '<br>';
echo "------------\n";
echo '<br>';

$array_e = [21,1,2,10];
var_dump($array_e); // array(4) { [0]=> int(21) [1]=> int(1) [2]=> int(2) [3]=> int(10) }
echo '<br>';
sort($array_e);
var_dump($array_e); // array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(10) [3]=> int(21) }

echo '<br>';
echo "------------\n";
echo '<br>';

$array_f = [
  21 => '21',
  1=>'1',
  2 => 'two',
  10 => 'ten',
];

var_dump($array_f);//array(4) { [21]=> string(2) "21" [1]=> string(1) "1" [2]=> string(3) "two" [10]=> string(3) "ten" }
echo '<br>';

sort($array_f);

var_dump($array_f); //array(4) { [0]=> string(1) "1" [1]=> string(2) "21" [2]=> string(3) "ten" [3]=> string(3) "two" }
echo '<br>';

ksort($array_f);

var_dump($array_f); //array(4) { [0]=> string(1) "1" [1]=> string(2) "21" [2]=> string(3) "ten" [3]=> string(3) "two" }
echo '<br>';

?>