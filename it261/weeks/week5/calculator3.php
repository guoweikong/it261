<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator 3 php form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My Travel Calculator</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<fieldset>
    <label>Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

    <label>Total miles driving?</label>
    <input type="number" name="mile" value="<?php if(isset($_POST['mile'])) echo htmlspecialchars($_POST['mile']) ;?>">

    <label>How fast do you typically drive?</label>
    <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

    <label>How many hours per day do you plan on driving?</label>
    <input type="number" name="hour" value="<?php if(isset($_POST['hour'])) echo htmlspecialchars($_POST['hour']) ;?>">

    <label>Price of gas</label>
    <ul>
    <li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked="checked" ' ;?>>$3.00</li>
    <li><input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked="checked" ' ;?>>$3.50</li>
    <li><input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked="checked" ' ;?>>$4.00</li>
    </ul>

    <label>Fuel efficiency</label>
    <select name="efficiency">
        <option value="" <?php if(isset($_POST['efficiency']) && is_null($_POST['efficiency'])) echo 'selected = "unselected" ' ;?>>Select one!</option>
        <option value="10" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10mpg') echo 'selected = "selected" ' ;?>>Terrible @ 10mpg</option>
        <option value="20" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '20mpg') echo 'selected = "selected" ' ;?>>Good @ 20mpg</option>
        <option value="30" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30mpg') echo 'selected = "selected" ' ;?>>Economy @ 30mpg</option>
        <option value="40" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '40mpg') echo 'selected = "selected" ' ;?>>Great @ 40mpg</option>
    </select>

    <input type="submit" value="Calculate">

    <p id="reset"><a href="">Reset</a></p>
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
            echo '<p class="error">Please choose your Fuel efficiency!</p>';
        }
   

    if(isset($_POST['name'],
             $_POST['mile'],
             $_POST['speed'],
             $_POST['hour'],
             $_POST['price'],
             $_POST['efficiency'])) {
        
        $name = $_POST['name'];
        $mile = floatval($_POST['mile']);
        $speed = floatval($_POST['speed']);
        $hour = floatval($_POST['hour']);
        $price = floatval($_POST['price']);
        $efficiency = floatval($_POST['efficiency']);
        $total_hours = $mile / $speed;
        $days = $total_hours / $hour;
        if ($efficiency != NULL) {
            $gas = $mile / $efficiency;
            $cost = $gas * $price;
        }
        
        if(!empty($name && $mile && $speed && $hour && $price) && ($efficiency != NULL)) {

        echo '
        <div class= "box">
        <p>Hello <b>'.$name.'</b>, you will be travelling a total of <b>'.number_format($total_hours,2).' hours</b>, taking <b>'.number_format($days,2).' days</b> <br>
        And, you will be using <b>'.number_format($gas, 2).' gallons</b> of gas, costing you <b>$'.number_format($cost,2).' dollars</b>.</p> 




        </div>
        ';
    }
             }


        } 


?>
</body>
</html>