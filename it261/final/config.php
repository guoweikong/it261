<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$errors = array();

$success = 'You have successfully logged on!';

 

 

 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    

}


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home Page of Our Website Project';
    $body = 'home';
    break;

    case 'about.php':
    $title = 'About Page of Our Website Project';
    $body = 'about_inner';
    break;

    case 'switch.php':
    $title = 'Switch Page of Our Website Project';
    $body = 'switch_inner';
    break;

    case 'cities.php':
    $title = 'Cities Page of Our Website Project';
    $body = 'cities_inner';
    break;

    case 'contact.php':
    $title = 'Contact Page of Our Website Project';
    $body = 'contact_inner';
    break;


    case 'thx.php':
    $title = 'Thanks Page of Our Website Project';
    $body = 'thx_inner';
    break;
}
// our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'switch.php' => 'Switch',
    'cities.php' => 'Cities',
    'contact.php' => 'Contact',
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href=" '.$key.' "> '.$value.' </a></li>';
        } else {
            $my_return .= '<li><a href=" '.$key.' "> '.$value.' </a></li>';
        }
    
    } // end foreach
    
    return $my_return;
    
    } // end function


// random images in index.php:
    $photos[0] = 'photo1';
    $photos[1] = 'photo2';
    $photos[2] = 'photo3';
    $photos[3] = 'photo4';
    $photos[4] = 'photo5';
    
    $i = rand(0, 4);
    
    function random_images($photos) {
    $my_return = '';
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpeg';
    $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';
    return $my_return;
    } // end function



// switch.php page:
    if(isset($_GET['today'])) {
    $today = $_GET['today'];

} else {
    $today = date('l');
}


switch($today) {
    case 'Friday':
        $actDay = 'black';
        $day = 'Friday is Colombia Day';
        $details = 'One of the biggest benefits of living in Colombia is visits to small towns. Especially if you love road trips and nature, then you will enjoy “puebleando” through the small colonial towns of Colombia. Experience 400-year-old wonders in the department of Santander outside of Bogota, or symmetrical wood architecture in the small towns of the department of Antioquia outside of Medellin.';
        $picture = './images/colombia.jpg';
        $altTag = 'Colombia';
        $background = 'gray';
        break;

    case 'Saturday':
        $actDay = 'red';
        $day = 'Saturday is Thailand Day';
        $details = 'There is no doubt that the allure of Thailand begins with its sun drenched, warm climate and appeals to those who have a keen sense of adventure and an eye for natural and cultural beauty. Thailand is the heart of Southeast Asia and is hugged by Cambodia, Laos, and Myanmar (Burma) in the north and shares a border with Malaysia in the south.';
        $picture = './images/thailand.jpg';
        $altTag = 'Thailand';
        $background = 'tomato';
        break;

    case 'Sunday':
        $actDay = 'purple';
        $day = 'Sunday is Italy Day';
        $details = 'Italy makes itself an ideal retirement location with an incredible diversity of climate, topography, beaches, food, wine, sports, community, healthcare, and a lifestyle that has the average Italian living one to five years longer than its Western European neighbors, and the average American. Its list of world-famous historical and cultural attractions is too numerous to mention.';
        $picture = './images/italy.jpg';
        $altTag = 'Italy';
        $background = 'mediumslateblue';
        break;     
        
    case 'Monday':
        $actDay = 'pink';
        $day = 'Monday is France Day';
        $details = 'France is a country that leaves few visitors indifferent. Beyond the glitz and glamour of Paris lies an appreciation for life, and the care of others, which is often overlooked when considering a retirement destination. ';
        $picture = './images/france.jpg';
        $altTag = 'France';
        $background = 'lightpink';
        break;

    case 'Tuesday':
        $actDay = 'orange';
        $day = 'Tuesday is Greece Day';
        $details = 'It should come as no surprise that Greece is ranked as one of the top places to retire as this sunny Mediterranean country offers stunning natural beauty, warm hospitality, an affordable cost of living, some of the best food in the world, and a rich, deep history.';
        $picture = './images/greece.jpg';
        $altTag = 'Greece';
        $background = 'orange';
        break;

    case 'Wednesday':
        $actDay = 'green';
        $day = 'Wednesday is Spain Day';
        $details = 'Sunny weather all year, a welcoming culture, an incredibly relaxed lifestyle, and a relatively low cost of living. These are just a few of the things that Spain offers. Long a favorite place for Brits, Germans, and other Northern Europeans to retire and spend their senior years, Spain is also an excellent choice for North Americans.';
        $picture = './images/spain.jpg';
        $altTag = 'Spain';
        $background = 'lightgreen';
        break;  

    case 'Thursday':
        $actDay = 'yellow';
        $day = 'Thursday is Costa Rica Day';
        $details = 'Ask any new (or established) expat in Costa Rica about their decision to move there and you will most likely hear the word “magical” woven into their response. While we can\'t verify any sorcerer spells or pixie dust, there does seem to be a certain magical quality of this Central American gem that you will not find anywhere else in the world.';
        $picture = './images/costa-rica.jpg';
        $altTag = 'Costa Rica';
        $background = 'lightyellow';
        break;

}






