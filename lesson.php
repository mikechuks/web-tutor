<?php
//$txt1 = "This is scary";
//$txt2 = "Digital Dreams";
//$x = 5;
//$y = 6;

//echo "<h2>$txt1</h2>";
//echo "Study Php at $txt2";
//echo "<br/>";
//echo $x + $y;

//Operators
//Aritmetic Operator
// + addition
// - subtraction
// * multiplication
// / Division
// % Modulus
// ++ Increment
// -- decrement

//$x = 10;
//$y = 3;
//$z = $x % $y;
//echo "<br/>";
//echo ++$x;

//Comparison Operator
// ==
// ===
// !=
// !==
// >
// <
// >=
// <=

//$y = 9;
//$x = 10;
//echo $x != $y;

//Logical Operators
// && = and
// || = Or
// ! = Not
//$x = 10;
//$y = 9;
//echo !($x > $y);

//Concatenation
//$a = "Hello ";
//$b = $a . "World!"; // now $b contains "Hello World!“
//echo $b;
//echo "<br>";

//Conditions
//if statement
//$a = 10;
//if ($a != 1)
//{
//echo "it's not equal";
//};

//if else statement
//$a = 1;
//if ($a == 1)
//{
//echo "it's equal";
//} else {
//echo "it is not equal";
//}

//if elseif statement
//$a=5;
//if ($a == 5)
//{
//echo "a equals 5";
//}
//elseif ($a == 6)
//{
//echo "a equals 6";
//}
//else
//{
//echo "a is neither 5 nor 6";
//}

//Switch statement
//$i = 2;
//switch ($i) {
//case 0:
//echo "$i equals 0";
//break;
//case 1:
//echo "$i equals 1";
//break;
//case 2:
//echo "$i equals 2";
//break;
//}

//Switch with Default
//$today=date("D");
//switch($today)
//{
//case "Mon":
//echo "today is Monday";
//break;
//case "Tue":
//echo "today is Tuesday";
//break;
//case "Sat":
//echo "today is Saturday";
//break;
//default:
//echo "today's date is a mystery";
//}

//Array
//$cars = array("Volvo", "BMW", "Toyota");
//echo $cars[1];
//echo "<br/>";
//$arrlength = count($cars);
//for($x = 0; $x < $arrlength; $x++) {
//echo $cars[$x]. "<br>";
//}

//for loop with array
//$cars = array("Volvo", "BMW", "Toyota");
//echo $cars[1];
//echo "<br/>";
//$arrlength = count($cars);
//for($x = 0; $x < $arrlength; $x++) {
//echo $cars[$x]. "<br>";
//}

//First method to associate create array. 
//$salaries = array(
//    "mohammad" => 2000,
//    "qadir" => 1000,
//    "zara" => 500
//    );
//    echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
//    echo "Salary of qadir is ". $salaries['qadir']. "<br />";
//    echo "Salary of zara is ". $salaries['zara']. "<br />";
    
//foreach loop with array
//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//foreach($age as $name => $name_value){
//echo $name . " is " . $name_value ." years old <br>";
//}

//Multidimensional Array
//$cars = array( array("Volvo",22,18), array("BMW",15,13), array("Saab",5,2),
//array("Land Rover",17,15)
//);
//for ($row = 0; $row < 4; $row++) {
//echo "<p><b>Row number $row</b></p>";
//echo "<ul>";
//for ($col = 0; $col < 3; $col++) {
//echo "<li>".$cars[$row][$col]."</li>";
//}
//echo "</ul>";
//}

//Array Function
//array_sum() returns the sum of values in an array as an integer or float.

//$a=2;
//$as = array(3, 4, 5, 6, 2);
//echo array_sum($as);

//array_reverse() takes input array and returns a new array with the order of the elements reversed.
//$cars = array("Volvo", "BMW", "Toyota");
//$reversed_array = array_reverse($cars);
//print_r($cars) ;
//print_r($reversed_array ) ;

//array_push() treats array as a stack, and pushes the passed variables onto the end of array. The length of array increases by the number of variables pushed.

//$arr = array("orange", "banana");
//array_push($arr, "apple", "raspberry");
//print_r($arr);

// count Returns the number of elements in an array
//$as = array(3, 4, 5, 6, 2);
//$result = count($as);
//echo $result ;

// Sort: This function sorts an array. Elements will be arranged in ascending order when this function has completed.
//$fruits = array("lemon", "orange", "banana", "apple");
//sort($fruits);
//$clength = count($fruits);
//for($x = 0; $x < $clength; $x++) {
//echo $fruits[$x]."<br>";
//}

//Loops
//While Loops
//$start = 1;
//$times = 2;
//while ($start < 11) {
//$answer = $start * $times;
//echo $start . " times " . $times . " = " . $answer . "<br>";
//$start++;
//}

//do .. While Loop
//$i = 0;
//do {
//echo $i."<br>";
//$i++;
//} while ($i < 10);

//for loop
//for ($i = 1; $i <= 31; $i++) {
//    echo "$i<br>";
//    } 

//for each loop
//$colors = array("red", "green", "blue", "yellow");
//foreach ($colors as $value) {
//echo "$value <br>";
//}

// continue and break
//for($i=0;$i<=10;$i++){
//    If($i==2)continue;
//    Echo "$i<br>";
//    }

//for($i=0;$i<=5;$i++){
//    if($i==2)break;
//    echo $i.'<br>';
//    }
   
//function
//String Function
//$str = "length";
//echo strlen($str);
//echo substr($str,0,4);

//$array = array('lastname', 'email', 'phone');
//$get_str = implode('|', $array);
//echo $get_str ;

//$str ='i love learning php';
//print_r(explode(' ', $str));

//str_split :converts the value of the variable to array
//$result = "obi is a boy";
//$a= str_split($result,3);
//print_r($a);

//ucfirst :converts the first character of the value to capital letter
//$result = "fight daily";
//echo ucfirst($result);

//ucwords :converts the first character of each word to capital letter
//$result = "obi";
//echo ucwords($result);

//strtolower :converts the letters in capital to small letters
//$result= "DAILY";
//echo strtolower($result);

//strtoupper :converts everything to capital
//$result = "daily";
//echo strtoupper($result)

//strtoupper :converts everything to capital
//$result = "daily";
//echo strtoupper($result)

//strpos :shows the position number of a letter in a variable. It starts counting from "0"
//$result = "obtexdt";
//echo strpos($result,"t");

//Maths Fuction
//ceil Round fractions up
//echo ceil(4.3); // 5
//echo "<br>";
//echo ceil(-3.14); // -3

//floor Round fractions down
//echo floor(4.3); // 4
//echo "<br>";
//echo floor(-3.14); // -4 

//sqrt Returns the square root of arg.
//echo sqrt(9); // 3
//echo "<br>";
//echo sqrt(10); // 3.16227766 ...

//Abs(): converts negative to positive
//$a= -4;
//echo abs($a);

//Pow():raised to power/exponential
//echo pow(10,2);
//can still work this way
//$c= 10;
//echo pow($c,2);

//rand():gives random numbers
//echo rand(100,10000000);
//or
//echo "<br/>";
//$d= 20;
//$e= 40;
//echo rand($d, $e);

//round ():used for approximation
//$kas= 10.9808;
//echo round($kas,1);

//Date Function
//date() function formats a local date and time, and returns the formatted date string.
//d - Represents the day of the month (01 to 31)
//m - Represents a month (01 to 12)
//Y - Represents a year (in four digits)
//y - A two digit representation of a year a
//l -(lowercase 'L') - Represents the day of the week
//a-Lowercase am or pm 

//A - Uppercase AM or PM
//i - Minutes with leading zeros (00 to 59)
//s - Seconds, with leading zeros (00 to 59)
//F - A full textual representation of a month (January through December)
//j - The day of the month without leading zeros (1 to 31)
//S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
//echo date("l jS \of F Y h:i:s A");


//PHP Function
function multiply ($x, $y){
return $x * $y;
}
echo Multiply(3,4);
?>