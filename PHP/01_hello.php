
<?php

echo "http://localhost:81/01_hello.php ";

$message = "Hello again!";

echo "Hello, World!  ";

echo $message;

$count = 3;
$price = 1.99;

var_dump($message);
var_dump($count);
var_dump($price);

$is_admin = true;
$data = null;

var_dump($is_admin, $data);

$count = 10;
$size = 2;

var_dump($count + 5);
var_dump($count + $size);

$price = 2.95;
$quantity = 5;
var_dump($price * $quantity);

$message = "Hello";
$name = "Dave";
echo $message . " " . $name;

$price = "150";
$quantity = 3;
$price = $price * $quantity;
var_dump($price);

$is_editor = true;
$is_admin = false;
var_dump($is_editor);
var_dump( ! $is_editor);
var_dump($is_editor or $is_admin);
var_dump($is_editor and $is_admin);

$message = 'Hello';
$name = "Dave";
$start = "3 o'clock";
$end = '4 o\'clock';
$days = "Monday\nTuesday\nWednesday";

echo $days;
echo "Hello $name";
echo "Hello {$name}";
