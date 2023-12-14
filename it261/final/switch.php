<?php 
session_start();
include('config.php');
include('./includes/header.php');
?>



<div id="wrapper">


<main>
    <h1>Welcome to our switch page</h1>
    
    <p>If you're considering retirement abroad, you need information, and you need lots of it. But more than that, you need guidance on how to interpret that information. That's what we're here for, and that's why we've compiled the 2023 Annual Global Retirement Index: to help you with the exciting business of choosing where in the world will best suit your needs.</p>

    <h2>Check out the Best Places to Retire in the world: </h2>

<ul>

    <li><a style="color:<?php 
    if($today == 'Monday') {
        echo 'pink';
    } else {
        echo 'blue';
    };
    ?>" href="switch.php?today=Monday">Monday</a></li>

    <li><a style="color:<?php 
    if($today == 'Tuesday') {
        echo 'orange';
    } else {
        echo 'blue';
    };
    ?>" href="switch.php?today=Tuesday">Tuesday</a></li>

    <li><a style="color:<?php 
    if($today == 'Wednesday') {
        echo 'green';
    } else {
        echo 'blue';
    };
    ?>" href="switch.php?today=Wednesday">Wednesday</a></li>

    <li><a style="color:<?php 
    if($today == 'Thursday') {
        echo 'yellow';
    } else {
        echo 'blue';
    };
    ?>" href="switch.php?today=Thursday">Thursday</a></li>

    <li><a style="color:<?php 
    if($today == 'Friday') {
        echo 'black';
    } else {
        echo 'blue';
    };
    ?>" href="switch.php?today=Friday">Friday</a></li>

    <li><a style="color:<?php 
    if($today == 'Saturday') {
        echo 'red';
    } else {
        echo 'blue';
    };
    ?>" href="switch.php?today=Saturday">Saturday</a></li>

    <li><a style="color:<?php 
    if($today == 'Sunday') {
        echo 'purple';
    } else {
        echo 'blue';
    };
    ?>" href="switch.php?today=Sunday">Sunday</a></li>


</ul>
     

</main>


<aside style="background-color:<?php echo $background; ?>">
    
    <h3 class="<?php echo $actDay; ?>"> <?php echo $day; ?> </h3>
    <img src="<?php echo $picture;?>" alt="<?php echo $altTag;?>">
    <p><?php echo $details; ?></p>
    
</aside>
</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');