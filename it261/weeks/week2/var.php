<?php
// my variables

// don't forget that a variable is merely a container for data


$name = "Guowei";  // Guowei is a string
$name = 'Jack';   // double quote and signle quote are same
echo $name;

$bady_temp = 98;  //98 is an integer
$bady_temp_new = 98.6;  //98.6 is a float
echo '<br>';   
echo "<br>";
echo $bady_temp;
echo "<br>";
echo $bady_temp_new;
echo "<br>";
echo "My name is $name!";
echo "<br>";
echo 'My name is $name!';  

echo "<br>";
echo 'My name is '.$name.'!';  

echo "<br>";
echo 'The normal body temperatrue for a human being is '.$bady_temp_new.' !';

echo "<br>";
$name = 'Sharon';
echo $name;
echo "<br>";

$x = 20;
$y = 5;

$z = $x + $y; // I am using the term "assigned" VS equals
echo $z;

echo "<br>";
$z = $x * $y;
echo $z;

echo "<br>";
$z = $x / $y;
echo $z;

echo "<br>";
$first_name = 'Guowei';
$last_name = 'Kong';
echo $first_name." ". $last_name;    //between two variables, use ." ". OR .' '. to join them.
echo "<br>";
echo $first_name.' '. $last_name; 

echo "<br>";
echo "My full name is $first_name $last_name";
echo "<br>";
echo 'My full name is '.$first_name.' '.$last_name.' .';