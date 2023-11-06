<?php

ob_start();

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

    case 'daily.php':
    $title = 'Daily Page of Our Website Project';
    $body = 'daily_inner';
    break;

    case 'project.php':
    $title = 'Project Page of Our Website Project';
    $body = 'project_inner';
    break;

    case 'contact.php':
    $title = 'Contact Page of Our Website Project';
    $body = 'contact_inner';
    break;

    case 'gallery.php':
    $title = 'Gallery Page of Our Website Project';
    $body = 'gallery_inner';
    break;
}
// our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
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


if(isset($_GET['today'])) {
    $today = $_GET['today'];

} else {
    $today = date('l');
}


switch($today) {
    case 'Friday':
        $actDay = 'black';
        $day = 'Friday is Discovery Park Day';
        $details = 'Head to the city\'s largest urban park to explore the 534 acres of tidal beaches, sea cliffs, and forests. Have kids in tow? The recently renovated play area includes new picnic tables, a zip line, and plenty of equipment to keep little ones entertained for hours.';
        $picture = './images/discoverypark.webp';
        $altTag = 'Discovery Park';
        $background = 'gray';
        break;

    case 'Saturday':
        $actDay = 'red';
        $day = 'Saturday is Seward Park Day';
        $details = 'Water lovers rejoice, this park on Lake Washington has boat launch options and beach lifeguards on site as of June 23 for swimmers. Prefer to stay on land? A nearly 2.5-mile bike and walking path offers visitors stunning views of the water while keeping feet dry.';
        $picture = './images/seward-park.png';
        $altTag = 'Seward Park';
        $background = 'tomato';
        break;

    case 'Sunday':
        $actDay = 'purple';
        $day = 'Sunday is Green Lake Park Day';
        $details = 'Stretch your legs in the center of the Green Lake neighborhood on the 3-mile track around the lake, perfect for runners, bikers, and strollers (of the kiddie or two-footed variety).';
        $picture = './images/green-lake.jpeg';
        $altTag = 'Green Lake Park';
        $background = 'mediumslateblue';
        break;     
        
    case 'Monday':
        $actDay = 'pink';
        $day = 'Monday is Gas Works Park Day';
        $details = 'One of Seattle\'s most unique attractions, this former gasification plant still boasts pieces of the industrial site. Explore the impressive remains of the metal generators, and don\'t miss the spectacular views of South Lake Union and downtown across the water.';
        $picture = './images/gas-works-park.jpeg';
        $altTag = 'Gas Works Park';
        $background = 'lightpink';
        break;

    case 'Tuesday':
        $actDay = 'orange';
        $day = 'Tuesday is Alki Beach Park Day';
        $details = 'Spectacular views of the Sound and the Olympic and Cascade Mountains make Alki Beach Park a beloved spot, just a ferry ride away from downtown.';
        $picture = './images/alki-beach.jpeg';
        $altTag = 'Alki Beach Park';
        $background = 'orange';
        break;

    case 'Wednesday':
        $actDay = 'green';
        $day = 'Wednesday is Golden Gardens Day';
        $details = 'A favorite spot for dog owners, this popular Ballard park offers an off-leash area for furry companions on its northern end—owners can enjoy the scenic views and loop trails along the Puget Sound, too.';
        $picture = './images/golden-gardens.jpeg';
        $altTag = 'Golden Gardens';
        $background = 'lightgreen';
        break;  

    case 'Thursday':
        $actDay = 'yellow';
        $day = 'Thursday is Volunteer Park Day';
        $details = 'The heart of this Capitol Hill park is the Volunteer Park Conservatory, a botanical garden featuring a variety of plant species inside a Victorian public glasshouse. Don\'t miss the park\'s blooming dahlias starting in July, courtesy of the Puget Sound Dahlia Association.';
        $picture = './images/volunteer-park.jpeg';
        $altTag = 'Volunteer Park';
        $background = 'lightyellow';
        break;

}


// my form's PHP 



$first_name = '';
$last_name = '';
$email = '';
$wines = '';
$gender = '';
$phone = '';
$regions = '';
$comments = '';
$privacy = '';


$first_name_err = '';
$last_name_err = '';
$email_err = '';
$wines_err = '';
$gender_err = '';
$phone_err = '';
$regions_err = '';
$comments_err = '';
$privacy_err ='';

// $my_wines = '';
// $my_return = '';
// $headers = '';


if($_SERVER['REQUEST_METHOD'] == "POST") {

// if  inputs are empty, we will declare a statement, else we will assign the $_POST to a variable
// $wines = $_POST['wines']

if(empty($_POST['wines'])) {
    // say something or do something
    $wines_err = 'What.. no wines?';

} else {
    $wines = $_POST['wines'];
}


if(empty($_POST['first_name'])) {
    // say something or do something
    $first_name_err = 'Please fill in your first name';

} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    // say something or do something
    $last_name_err = 'Please fill in your last name';

} else {
    $last_name = $_POST['last_name'];
}


if(empty($_POST['email'])) {
    // say something or do something
    $email_err = 'Please fill in your email';

} else {
    $email = $_POST['email'];
}


if(empty($_POST['gender'])) {
    // say something or do something
    $gender_err = 'Please check your gender';

} else {
    $gender = $_POST['gender'];
}


if(empty($_POST['phone'])) {
    // say something or do something
    $phone_err = 'Please fill in your phone number';

} else {
    $phone = $_POST['phone'];
}


if(empty($_POST['comments'])) {
    // say something or do something
    $comments_err = 'We value your input';

} else {
    $comments = $_POST['comments'];
}


if(empty($_POST['privacy'])) {
    // say something or do something
    $privacy_err = 'You must agree to receive spam email';

} else {
    $privacy = $_POST['privacy'];
}


if($_POST['regions'] == NULL) {

    $regions_err = 'Please choose your region';
} else {
    $regions = $_POST['regions'];
}


function my_wines($wines) {
    $my_return = '';
    
    if(!empty($_POST['wines'])) {
        $my_return = implode(',' , $_POST['wines'] );
    }
    return $my_return;

} // end my_wines function

if(isset( $_POST['first_name'],
          $_POST['last_name'],
          $_POST['email'],
          $_POST['gender'],
          $_POST['phone'],
          $_POST['wines'],
          $_POST['regions'],
          $_POST['comments'],
          $_POST['privacy'])) {

        $to = 'guoweikong2020@gmail.com';
        $subject = 'Test email on  '.date('m/d/y, h i A');
        $body = '
        First Name: '.$first_name.'  '.PHP_EOL.'
        Last Name: '.$last_name.'  '.PHP_EOL.'
        Email: '.$email.'  '.PHP_EOL.'
        Gender: '.$gender.'  '.PHP_EOL.'
        Wines: '.my_wines($wines).'  '.PHP_EOL.'
        Regions: '.$regions.'  '.PHP_EOL.'
        Phone: '.$phone.'  '.PHP_EOL.'
        Comments: '.$comments.'  '.PHP_EOL.'
        
        ';

        $headers = array (
            'From' => 'noreply@gmail.com'
        );

        // we will be adding an if statement - that this email form will work ONLY if all the fields are filled out!!

        if(!empty(
            $first_name &&
            $last_name &&
            $email &&
            $gender &&
            $wines &&
            $regions &&
            $phone &&
            $comments )) {
                mail($to, $subject, $body, $headers);
                header ('Location:thx.php');
            }

            // don't forget, you must upload your form onto the server to receive the email!!
        
          } // end isset

} //closing server request method