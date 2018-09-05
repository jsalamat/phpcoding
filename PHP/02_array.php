
<?php

echo  nl2br ("http://localhost:81/02_array.php \n");

$article1 = "First post";
$article2 = "Another post";
$article3 = "Read this!";

$array_functions = array( "Element 0",
                          "Element 1",
                          "Element 2");

$array_w_brackets = [
  "First post",
  "Another post",
  "Read this!"
];

echo  nl2br ("can\'t use echo for arrays \n");

var_dump($array_w_brackets[0]);
var_dump($array_w_brackets[1]);
var_dump($array_w_brackets[2]);
var_dump($array_w_brackets[5]);
echo nl2br ("\n");

echo  nl2br ("apply index on array \n");

$array_indexes = [
  10 => "Element 0",
  "index" => "Element 1",
  "Element 2"
];

var_dump($array_indexes);
echo nl2br ("\n");

echo  nl2br ("can only use strings and intergers on indexes \n");

echo  nl2br ("Associative arrays are strings with indexes \n");
$associative_array = [
  "first" => "Element 0",
  "second" => "Element 1",
  "third" => "Element 2"
];
var_dump($associative_array);
var_dump($associative_array["second"]);
echo nl2br ("\n");

echo nl2br ("Multidimensional Array are elemenst of many types, Use for Tables and Data \n");
echo  nl2br ("Multidimensional Array \n");
$multidimensional_array = [
  "message" => "Hello World!",
  "count" => 150,
  "pi" => 3.14,
  "status" => false,
  "result" => null
];
var_dump($multidimensional_array);

$count1 = 3;
$price1 = 9.99;

$values1 = [$count1, $price1];
var_dump($values1);

$alice = [
  "name" => "Alice",
  "email" => "alice@example.com",
  "height" => 1.80
];

$bob = [
  "name" => "Bob",
  "email" => "bob@example.com",
  "height" => 1.67
];

$carol = [
  "name" => "Carol",
  "email" => "carol@example.com",
  "height" => 1.74
];
$people = [$alice, $bob, $carol];
echo nl2br ("\n");

echo nl2br ("Accessing multidimentional array elements \n");
$people = [
  [ "name" => "Alice",
    "email" => "alice@example.com",
    "height" => 1.80 ],
  [ "name" => "Bob",
    "email" => "bob@example.com",
    "height" => 1.67 ],
  [ "name" => "Carol",
    "email" => "carol@example.com",
    "height" => 1.74 ]
];

$alice_email = $people[0]["email"];

$article = [
  ["title" => "First post", "content" => "This is the first post"],
  ["title" => "Another post", "content" => "Another post to read here"],
  ["title" => "Read this!", "content" => "This is the first post"]
];
var_dump ($article[1]["title"]);
echo nl2br ("\n");

echo nl2br ("Unknown number of variables \n");

$article = [ "First post", "Another post", "Read this!" ];
foreach ($article as $article) {
  echo $article, ", ";
}
echo nl2br ("\n");

echo nl2br ("Process the value and index of each array element using a foreach loop \n");
$articles = [ "First post", "Another post", "Read this!" ];
foreach ($articles as $index => $article) {
  echo $index . ' - '. $article, ", ";
}
echo nl2br ("\n");
$articles = [
  "a" => "First post",
  "b" => "Another post",
  "c" => "Read this!"
 ];
foreach ($articles as $index => $article) {
  echo $index . ' - '. $article, ", ";
}
echo nl2br ("\n");

$array = [
    "one" => "ObjectA",
    "two" => "ObjectB",
    "three" => "ObjectC"
];

foreach ($array as $index => $value) {
    echo "$index = $value. ";
}
