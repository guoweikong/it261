<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<label>Enter the first number:</label>
<input type="number" name="num1"><br>
<label>Enter the second number:</label>
<input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> 
</form>

<?php     

if (isset($_POST['num1'], 
          $_POST['num2'])){

    if(empty($_POST['num1'] &&
             $_POST['num2'])) {

                echo '<p> Please fill out all of the fields</p>';

             } else { 

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $my_total = $num1 + $num2;
    echo '<h2>You added '.$num1.' and '.$num2.'</h2>';
    echo '<p> and the answer is </p>
    <p style="color:red;"> '.$my_total.'!</p>';
    echo'<p><a href="">Reset page</a></p>';

        }  
    }

?>


</body>
</html>



    
<!-- add $_POST['num2'] to isset on line 6 -->
<!-- correct $myTotal to $my_total on line 7 -->
<!-- delete "-" before "=" on  line 7 -->
<!-- correct $Num2 to $num2 on line 7 -->
<!-- missing </h2> on line 8 -->
<!-- correct ".$num1" to '.$num1' inside the echo '<h2> </h2>' on line 8 -->
<!-- add '' to .$num2 on line 8 -->
<!-- add </p> on line 9, and delete <br> -->
<!-- add p inside <style="color:red;"> on line 10 -->
<!-- missing ' after the </p> on line 10 -->
<!-- correct " $myTotal ." to '.$my_total.' on line 10 -->
<!-- delete extra " after ! on line 10 -->
<!-- missing </p> and ; on line 11 -->
<!-- missing ?> on line 14 -->
<!-- add HTML header to line 18-22 -->
<!-- on line 30 correct <\form action=""> to <form action="" method="post"> by deleting \ and adding method="post" -->
<!-- missing <label> on line 31 -->
<!-- change type="text" to type="number" on line 32-->
<!-- correct "Num1" to "num1" on line 32 -->
<!-- add <label> </label> on line 33 -->
<!-- change type="text" to type="number" on line 34-->
<!-- missing " at the end of line 35 -->
<!-- delete extra symbols ';{?> on the last line  -->
<!-- put <?php  ?> inside<body> and after </form> -->
<!-- add if(empty) inside is(isset) loop -->
