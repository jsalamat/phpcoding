<?php

echo  nl2br ("http://localhost:81/03_control_structures.php \n");
echo nl2br ("\n");
echo  nl2br ("-- Control Structures -- \n");
echo  nl2br ("the If Contruct \n");
# The if construct
/*
if (condition) {
  code to run if condition is true
}
*/

if (true) {
  echo "The condition is true";
}
// The condition is true
echo nl2br ("\n");
if (false) {
  echo "The condition is true";
}
// blank
echo nl2br ("\n");

$article = [];
var_dump(empty($articles));
echo nl2br ("\n");
if (empty($articles)) {
  echo "The array is empty";
}
/*
if (condition) {
  code to run if condition is true
} else {
  code to run if condition is false
}
*/
echo nl2br ("\n");

$article = [ "First post", "Another post", "Read this!" ];
var_dump(empty($articles));
echo nl2br ("\n");
if (empty($articles)) {
  echo "The array is empty";
} else {
  echo "The array is not empty";
}
echo nl2br ("\n");
echo nl2br ("\n");
echo  nl2br (" Comparison Operators \n");

var_dump(3 == 4);
var_dump(4 == 4);
echo nl2br ("\n");
/*
== equal
!= not equal
< less than
> greater than
<= less than or equal to
>= greater than or equal to
*/

$age = 21;
if (age == 21) {
  echo "Condition is true";
} else {
  echo "Condition is false";
}
echo nl2br ("\n");
$age = 21;
if (age != 21) {
  echo "Condition is true";
} else {
  echo "Condition is false";
}

echo nl2br ("\n");
echo nl2br ("\n");
echo  nl2br (" While Loops \n");
/*
while (condition) {
  code to run while condition is true
}
*/
// need a condition to run false or it will run forever
$month = 1;
while ($month <= 12) {
  echo $month . ", ";
  $month = $month + 1;
}

echo nl2br ("\n");
echo nl2br ("\n");
echo  nl2br (" For Loops \n");
/*
for (init; test; change) {
  code to run while test is true
}
*/
// first initialize the counter to intial value
// then specify a test for it
// if true then run the code block
// if false the code ends
// finslly add a change to counter value after each code bloack is executed

for ($i = 1; $i <= 10; $i++) {
  echo $i . ", ";
}

echo nl2br ("\n");
echo nl2br ("\n");
echo  nl2br (" elseif Construct \n");
$hour = 11;
if ($hour < 12) {
  echo "Good Morning";
} elseif ($hour < 18) {
  echo "Good Afternoon";
} elseif ($hour < 22) {
  echo "Good Evening";
} else {
  echo "Good Night";
}
echo nl2br ("\n");
echo nl2br ("\n");

echo  nl2br (" The Switch Statement \n");
$day = "Tue";

switch ($day) {
  case "Mon":
    echo "Monday";
    break;
  case "Tue":
    echo "Tuesday";
    break;
  case "Wed":
    echo "Wednesday";
    break;
  case "Thu":
    echo "Thursday";
    break;
  case "Fri":
    echo "Friday";
    break;
  case "Sat":
    echo "Saturday";
    break;
  case "Sun":
    echo "Sunday";
    break;
  default:
    echo "No information available for that day";
    break;
}

echo nl2br ("\n");
echo nl2br ("\n");

echo  nl2br (" Exercise \n");

$array = [];
for ($i = 1; $i <= 10; $i++) {
 if ($i < 4) {
    $array[] = "a";
 } elseif ($i <= 7) {
    $array[] = "b";
 } elseif ($i >= 8) {
    $array[] = "c";
 }
};
var_dump($array );
