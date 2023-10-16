<?php
// class coffee exercise
// if today is Friday, it will be pumpkin latte day
// INTRODUCING the isset() function
// then we will introduce our first GLOBAL variable
// our switch


// starting the switch
// if $GET['today'] is set, $today, then all is well, but it is not set therefore the else is the day!
// else, today  is TODAY

// GLOBAL VARIABLES are capitalized and start  with $_GET

// what is the isset function -  is asking if something has been set?

// $variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';
// } else {
//     echo 'Variable has not been set!';
// }

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'Not!!';
// }

if(isset($_GET['today'])) {
    $today = $_GET['today'];

} else {
    $today = date('l');
}


switch($today) {
    case 'Friday':
        $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpeg';
        $alt = 'Pumpking Latte';
        $content = '<p><b>The Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional fall spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. </p>';
        break;

    case 'Saturday':
        $coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
        $pic = 'green-tea.jpeg';
        $alt = 'Green Tea Latte';
        $content = '<p><b>A green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place. </p>';
        break;

    case 'Sunday':
        $coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Regular Joe';
        $content = '<p><b>regular coffee</b> (countable and uncountable, plural regular coffees) Coffee of the sort which is considered the default in a given area: (New England) Coffee with cream and sugar (in contrast to the expected meaning of "black coffee" in other regions of the US). (Canada) Coffee with one cream and one sugar. </p>';
        break;     
        
    case 'Monday':
        $coffee = '<h2>Monday is our Latte Day!</h2>';
        $pic = 'latte.jpeg';
        $alt = 'Latte';
        $content = '<p><b>Caffè latte</b>, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk. Variants include the chocolate-flavored mocha or replacing the coffee with another beverage base such as masala chai (spiced Indian tea), mate, matcha, turmeric or rooibos; alternatives to milk, such as soy milk or almond milk, are also used. </p>';
        break;

    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Americano Day!</h2>';
        $pic = 'americano.jpeg';
        $alt = 'Americano';
        $content = '<p><b>Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso shot with hot water at a 1:3 to 1:4 ratio, resulting in a drink that retains the complex flavors of espresso, but in a lighter way. Its strength varies with the number of shots of espresso and the amount of water added.</p>';
        break;

    case 'Wednesday':
        $coffee = '<h2>Wednesday is our Cappuccino Day!</h2>';
        $pic = 'cap.jpeg';
        $alt = 'Cappuccino';
        $content = '<p><b>A cappuccino</b> is an espresso-based coffee drink that is traditionally prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.</p>';
        break;  

    case 'Thursday':
        $coffee = '<h2>Thursday is our Frappe Coffee Day!</h2>';
        $pic = 'frap.jpeg';
        $alt = 'Frappe Coffee';
        $content = '<p><b>A frappé coffee,</b> Cold coffee, Greek frappé, or just frappé is a Greek iced coffee drink generally made from spray-dried instant coffee, water, sugar, and milk. The word is often written frappe.</p>';
        break;  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }

        #wrapper {
            width:940px;
            margin:20px auto;
        }

        h1, h2, img {
            margin-bottom:10px;
        }

        p {
            margin-bottom:20px;
        }

    </style>
</head>
<body>
   <div id="wrapper"> 
    <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
    <?php
        echo $coffee;
    ?>
    <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <?php echo $content; ?>
    <h2>Check out our Daily Specials</h2>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>

    </ul>
    </div>
    <!-- end wrapper -->
</body>
</html>