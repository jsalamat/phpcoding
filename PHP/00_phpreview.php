<?php
// C:/ MAMP / htdocs / 
echo "http://localhost:81/00_phpreview.php ";
echo  nl2br ("\n");
// php opening tag - <?php

echo "Hello, World!";
echo  nl2br ("\n");

// ----------   Variable: Strings, integers, and boolean --------
$message = "Hello Again!";
echo $message;
echo  nl2br ("\n");
// when naming variables use lowercase and space with underscores

// not same value
$integer = 123;
$string = "123";

// var_dump(); useful for showing information about type and value;
var_dump($integer);
var_dump($string);
echo  nl2br ("\n");

$messageString = 'Hello Again!';
$countInterger = 3;
$price = 1.99; 
// You can passed in multiple variable in var_dump();
var_dump($messageString, $countInterger, $price);
echo  nl2br ("\n");

// Boolean Values - assign true or false to variable
$logger_in = true;
$is_admin = false;
var_dump($logger_in, $is_admin);
echo  nl2br ("\n");

// Null - represent a variable that has no value
$nullVariable = null;
var_dump($nullVariable);
echo  nl2br ("\n");

// Arithmetic Operators
/*
+$a	       Identity	        Conversion of $a to int or float as appropriate
-$a	       Negation	        Opposite of $a
$a + $b	   Addition	        Sum of $a and $b
$a - $b	   Subtraction	    Difference of $a and $b
$a * $b	   Multiplication	Product of $a and $b
$a / $b	   Division	        Quotient of $a and $b
$a % $b	   Modulo	        Remainder of $a divided by $b
$a ** $b   Exponentiation	Result of raising $a to the $b'th power 
*/

$count = 10;
$size = 2;
var_dump($count + 5);
var_dump($count * $size);
echo  nl2br ("\n");

$price = 2.95;
$quantity = 5;
var_dump($price * $quantity);
echo  nl2br ("\n");

//concatenate
$message = "Hi";
$name = "Eddy";
echo $message . " " . $name;
echo  nl2br ("\n");

//multiplying a string with interger result into a integer
$price = "160";
$quantity = 3;
$price = $price * $quantity;
var_dump($price);
echo  nl2br ("\n");

// Type Juggling 
// a variable's type is determined by the context in which the variable is used. 
// That is to say, if a string value is assigned to variable $var, 
// $var becomes a string. If an integer value is then assigned to $var, 
// it becomes an integer.

$foo = "1";  // $foo is string (ASCII 49)
$foo *= 2;   // $foo is now an integer (2)
$foo = $foo * 1.3;  // $foo is now a float (2.6)
$foo = 5 * "10 Little Piggies"; // $foo is integer (50)
$foo = 5 * "10 Small Pigs";     // $foo is integer (50)

// Logical Operators
/*
$a and $b	And		TRUE if both $a and $b are TRUE.
$a or $b	Or		TRUE if either $a or $b is TRUE.
$a xor $b	Xor		TRUE if either $a or $b is TRUE, but not both.
! $a		Not		TRUE if $a is not TRUE.
$a && $b	And		TRUE if both $a and $b are TRUE.
$a || $b	Or		TRUE if either $a or $b is TRUE.
*/

$is_editor = true;
$is_admin = false;

var_dump($is_editor);
echo  nl2br ("\n");
// not operator
var_dump( ! $is_editor);
echo  nl2br ("\n");
// Logical Operators
var_dump($is_editor or $is_admin);
echo  nl2br ("\n");
var_dump($is_editor and $is_admin);
echo  nl2br ("\n");

// Using single and double quotes
$message = 'Hello';
$name = "Dave";

$start = "3 o'clock";
$end = '4 o\'clock';
echo $start, $end;
echo  nl2br ("\n");

// Double quoted: Escaped characters
/*
\n					linefeed (LF or 0x0A (10) in ASCII)
\r					carriage return (CR or 0x0D (13) in ASCII)
\t					horizontal tab (HT or 0x09 (9) in ASCII)
\v					vertical tab (VT or 0x0B (11) in ASCII) (since PHP 5.2.5)
\e					escape (ESC or 0x1B (27) in ASCII) (since PHP 5.4.4)
\f					form feed (FF or 0x0C (12) in ASCII) (since PHP 5.2.5)
\\					backslash
\$					dollar sign
\"					double-quote
\[0-7]{1,3}			the sequence of characters matching the regular expression is
					a character in octal notation, which silently overflows to fit
					in a byte (e.g. "\400" === "\000")
\x[0-9A-Fa-f]{1,2}	the sequence of characters matching the regular expression is
					a character in hexadecimal notation
\u{[0-9A-Fa-f]+}	the sequence of characters matching the regular expression is
					a Unicode codepoint, which will be output to the string as that codepoint's UTF-8 representation (added in PHP 7.0.0)
*/

$days = "Monday\nTuesday\nWednesday";
echo $days;
echo  nl2br ("\n");

// Same result
echo "Hello " . $name;
echo  nl2br ("\n");
// Variable Interpolation
echo "Hello $name";
echo  nl2br ("\n");
echo "Hello {$name}"; // it better to surround it with curly braces
echo  nl2br ("\n");
echo  nl2br ("\n");

/*
PHP is a server-side scripting language
PHP is a loosely-typed language - its variables can contain values of any type

// Review
$name = "Jon";
$age = 34;
$status = true;
$new_age = $age + 10;
$sentence = $name . " knows PHP!";
//or
// $sentence = "{$name} knows PHP!";
*/
// ----------   Arrays --------
// Array with square brackets
$array_w_brackets = [
  "First post",
  "Another post",
  "Read this!" 
];
// Array Function
$array_functions = array(
  "First post",
  "Another post",
  "Read this!" 
);

echo  nl2br ("can\'t use echo for arrays but var_dump instead\n");

var_dump($array_w_brackets);
echo  nl2br ("\n");

// Array elements and indexes
$articles = [
 "First post",
 "Another post",
 "Read this!" 
];
/*
[  "First post",   "Another post",  "Read this!"  ]
		 ^				   ^				 ^	
		 |				   |				 |
		 0				   1				 2
	$articles[0]	  $articles[1]      $articles[2] 
*/
var_dump($articles[0]);
var_dump($articles[1]);
var_dump($articles[2]);
var_dump($articles[3]);
var_dump($articles[4]);
var_dump($articles[5]);
echo  nl2br ("\n");

// Assign Manual Array Indexes and Create Associative Array
// Specify index, can use whole number
// Associative Arrays -> string but make to put quotes
// when not assign index it populate the following index integer
$array_indexes = [
 1 => "Element 0",
 "index" => "Element 1",
 3 => "Element 2", 
 "Element 3" 
];
var_dump($array_indexes); 
// array(4) { [1]=> string(9) "Element 0" ["index"]=> string(9) "Element 1" [3]=> string(9) "Element 2" [4]=> string(7) "Element" } 
echo  nl2br ("\n");

echo  nl2br ("Associative arrays are strings with indexes \n");
$associative_array = [
  "first" => "Element 0",
  "second" => "Element 1",
  "third" => "Element 2"
];
var_dump($associative_array);
var_dump($associative_array["second"]);
echo nl2br ("\n");
echo nl2br ("\n");
// Create and Access Multidimensional Arrays
echo  nl2br ("Multidimensional Array \n");
$multidimensional_array = [
  "message" => "Hello World!",
  "count" => 150,
  "pi" => 3.14,
  "status" => false,
  "result" => null
];
var_dump($multidimensional_array);
echo nl2br ("\n");
// placing value into an array
$count1 = 3;
$price1 = 9.99;

$values1 = [$count1, $price1];
var_dump($values1);
echo nl2br ("\n");

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
var_dump($alice_email);
echo nl2br ("\n");

$article = [
  ["title" => "First post", "content" => "This is the first post"],
  ["title" => "Another post", "content" => "Another post to read here"],
  ["title" => "Read this!", "content" => "This is the first post"]
];
var_dump($article); // <--- right click and view page source
echo nl2br ("\n");
echo nl2br ("\n");
var_dump($article[1]["content"]);
echo nl2br ("\n");
echo nl2br ("\n");
// Arrays - Processing Arrays foreach Loops
echo  nl2br ("Arrays - Processing Arrays foreach Loops \n");
// ***** foreach *******
/*
The foreach construct provides an easy way to iterate over arrays. foreach works only on arrays and objects, and will issue an error when you try to use it on a variable with a different data type or an uninitialized variable. There are two syntaxes:

foreach (array_expression as $value)
    statement
foreach (array_expression as $key => $value)
    statement

The first form loops over the array given by array_expression. On each iteration, the value of the current element is assigned to $value and the internal array pointer is advanced by one (so on the next iteration, you'll be looking at the next element).

The second form will additionally assign the current element's key to the $key variable on each iteration.
// http://php.net/manual/en/control-structures.foreach.php
*/

$articles = [ "first post", "Another post", "Read this!" ];
foreach ($articles as $article) {
	echo $article, ", ";
};
// first post, Another post, Read this!,
echo nl2br ("\n");
echo nl2br ("\n");
// Process the value and index of each array element using foreach loop
echo nl2br ("Process the value and index of each array element using foreach loop \n");
$articles = [ "first post", "Another post", "Read this!" ];
foreach ($articles as $index => $article ) {
	echo $index . ' - ' . $article, ", ";
};
// 0 - first post, 1 - Another post, 2 - Read this!, 
echo nl2br ("\n");
echo nl2br ("\n");

echo nl2br ("Manually Assign indexs \n");
$articles = [ 
	'a' => "first post",
	'b' => "Another post", 
	'c' => "Read this!" 
];
foreach ($articles as $index => $article ) {
	echo $index . ' - ' . $article, ", ";
};
// a - first post, b - Another post, c - Read this!, 
echo nl2br ("\n");
echo nl2br ("\n");

echo nl2br ("Review \n");
$array = [
    "one" => "ObjectA",
    "two" => "ObjectB",
    "three" => "ObjectC" 
];

foreach ($array as $index => $value) {
    echo "$index = $value.";
}
echo nl2br ("\n");
// one = ObjectA.two = ObjectB.three = ObjectC.
foreach ($array as $index => $value) {
    echo nl2br("$index = $value.\n");
}
echo nl2br ("\n");
// one = ObjectA.
// two = ObjectB.
// three = ObjectC.

// ---------- Control Structures --------
// Run Code Conditionally: the if Construct
/*
if (condition) {
	code to run if condition is true
} else {
	code to run if condition is false
}
*/
echo nl2br ("the if Construct \n");
// example
if (true) {
	echo "The condition is true";
}
echo nl2br ("\n");

$articles = [];
// $articles = [ "first post", "Another post", "Read this!" ];
var_dump(empty($articles)); //true
echo nl2br ("\n");
// if (!$articles) {
// or
if (empty($articles)) {
	echo "Array is empty";
} else {
	echo "Array is not empty: ";
	foreach ($articles as $index => $value) {
    	echo "$index = $value. ";
	}
}
// Array is empty
echo nl2br ("\n");

// Compare One Value to another: Comparison Operators
// Comparison Operators
// http://php.net/manual/en/language.operators.comparison.php
/*
$a == $b	Equal				TRUE if $a is equal to $b after type juggling.
$a === $b	Identical			TRUE if $a is equal to $b, and they are of the same type.
$a != $b	Not equal			TRUE if $a is not equal to $b after type juggling.
$a <> $b	Not equal			TRUE if $a is not equal to $b after type juggling.
$a !== $b	Not identical		TRUE if $a is not equal to $b, or they are not of
		    					the same type.
$a < $b		Less than				TRUE if $a is strictly less than $b.
$a > $b		Greater than			TRUE if $a is strictly greater than $b.
$a <= $b	Less than or equal to	TRUE if $a is less than or equal to $b.
$a >= $b	Greater than or equal to	TRUE if $a is greater than or equal to $b.
$a <=> $b	Spaceship					An integer less than, equal to, 
										or greater than zero when $a is respectively 
										less than, equal to, or greater than $b. 
										Available as of PHP 7.
*/

// Example
var_dump(3 == 4); // false 
echo nl2br ("\n");
var_dump(4 == 4); // true
echo nl2br ("\n");

$age = 21;
// if($age == 21) {
// if($age != 21) {
// if($age < 21) {
if($age >= 21) {
	echo "Condition is true";
} else {
	echo "Condition is false";
}
// Condition is true
echo nl2br ("\n");
echo nl2br ("\n");

echo  nl2br (" While Loops \n");
// While Loops
/*
while (condition)
	code to run while condition is true
*/
// need a condition to run false or it will run forever

//Example
$month = 1;
while ($month <= 12) {
  echo $month . ", ";
  $month = $month + 1;
}
// 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 
echo nl2br ("\n");
echo nl2br ("\n");

echo  nl2br (" For Loops \n"); // http://php.net/manual/en/control-structures.for.php
/*
for (init; test; change) {
  code to run while test is true
}
*/
// first initialize the counter to intial value
// then specify a test for it
// if true then run the code block
// if false the code ends
// finally add a change to counter value after each code block is executed

for ($i = 1; $i <= 10; $i++) {
  echo $i . ", ";
}
// 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 
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
// Good Morning
echo nl2br ("\n");
echo nl2br ("\n");

echo  nl2br (" The Switch Statement \n");

$day = "Wrong";

switch($day) {
	case "Mon";
		echo "Monday";
		break;
	case "Tue";
		echo "Tuesday";
		break;
	case "Wed";
		echo "Wednesday";
		break;
	case "Thur";
		echo "Thursday";
		break;
	case "Fri";
		echo "Friday";
		break;
	case "Sat";
		echo "Saturday";
		break;
	case "Sun";
	break;
		echo "Sunday";
	default;
		echo "No value Match";
		break;
}