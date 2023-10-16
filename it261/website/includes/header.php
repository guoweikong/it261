<?php
// create constant
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



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="./css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body;?>">
    <header>
        <div class="inner-header">
            <a href="index.php">
                <img id="logo" src="images/php_logo.png" alt="logo">
            </a>

            <!-- <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                </ul>
            </nav> -->
        <nav>
            <ul>
            <?php
                foreach($nav as $key => $value) {
                    if(THIS_PAGE == $key) {
                        echo '<li><a style="color:salmon;" href=" '.$key.' "> '.$value.' </a></li>';
                    } else {
                        echo '<li><a style="color:white;" href=" '.$key.' "> '.$value.' </a></li>';
                    }
                    
                    } // end foreach

            ?>
        </ul>
        </nav>
        </div>
        <!-- end inner header -->
    </header>