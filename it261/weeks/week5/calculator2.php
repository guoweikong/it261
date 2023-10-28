<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator 2 php form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<fieldset>
    <label>Name</label>
    <input type="text" name="name">

    <label>Total miles driving?</label>
    <input type="number" name="mile">

    <label>How fast do you typically drive?</label>
    <input type="number" name="speed">

    <label>How many hours per day do you plan on driving?</label>
    <input type="number" name="hour">

    <label>Price of gas</label>
    <ul>
    <li><input type="radio" name="price" value="3.00">$3.00</li>
    <li><input type="radio" name="price" value="3.50">$3.50</li>
    <li><input type="radio" name="price" value="4.00">$4.00</li>
    </ul>

    <label>Fuel efficiency</label>
    <select name="efficiency">
        <option value="" NULL>Select one!</option>
        <option value="10mpg">Terrible @ 10mpg</option>
        <option value="20mpg">Good @ 20mpg</option>
        <option value="30mpg">Economy @ 30mpg</option>
        <option value="40mpg">Great @ 40mpg</option>
    </select>

    <input type="submit" value="Calculate">

    <p><a href="">Reset</a></p>
</fieldset>
</form>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name!</p>';
        }

        if(empty($_POST['mile'])) {
            echo '<p class="error">Please fill out the total miles driving!</p>';
        }

        if(empty($_POST['speed'])) {
            echo '<p class="error">Please fill out the speed!</p>';
        }

        if(empty($_POST['hour'])) {
            echo '<p class="error">Please fill out the hours that you plan on driving per day!</p>';
        }

        if(empty($_POST['price'])) {
            echo '<p class="error">Please check your price of gas!</p>';
        }

        if($_POST['efficiency'] == NULL) {
            echo '<p class="error">Please choose your Fuel efficiency!</p>'
        }
   

    if(isset($_POST['name'],
             $_POST['mile'],
             $_POST['speed'],
             $_POST['hour'],
             $_POST['price'])) {
        
        $name = $_POST['name'];
        $mile = $_POST['mile'];
        $speed = $_POST['speed'];
        $hour = $_POST['hour'];
        $price = $_POST['price'];

        echo '
        <div class= "box">
        <p>Hello '.$name.', you will be travelling a total of '.$hour.' hours, taking '.$price.' gas <br>
        And, you will be using </p> 




        </div>
        ';
             }


        } 


?>
</body>
</html>