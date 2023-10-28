<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator 1 php form</title>
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

    <input type="submit" value="Calculate">

    <p><a href="">Reset</a></p>
</fieldset>
</form>

<?php

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


?>
</body>
</html>