<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="./css/styles.css" rel="stylesheet" type="text/css">
</head>
<body class="<?php echo $body;?>">
    <header>
  

<!-- if our session for the username is successful, we will display a message. -->
<?php

// if the usename has not been set, you will not see the index.php file, but will be directed back to the login page.

if(!isset($_SESSION['username'])) {

    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}


if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>
<!-- end success -->
<?php endif ;

// let the user know that we are recognizing them:
if(isset($_SESSION['username'])) :?>

    <div class="welcome-logout">
    <h3> Hello
    <?php  echo $_SESSION['username'] ;?>
    </h3>
    <a href="index.php?logout='1' "> Log out </a>
    
    
    </div>
    <!-- end welcome-logout -->
    <?php endif ;?>

    <div class="inner-header">
            <a href="index.php">
                <img id="logo" src="images/php_logo.png" alt="logo">
            </a>

        <nav>
            <ul>
            <?php
                echo make_links($nav);
            ?>
        </ul>
        </nav>
        </div>
        <!-- end inner header -->
    </header>