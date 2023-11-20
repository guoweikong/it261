<?php 
include('config.php');
include('./includes/header.php');
?>



<div id="wrapper">


<main>
    <h1>Welcome to our daily page</h1>
    
    <p>In Seattle, you're never too far from nature—the 485+ parks within city limits offer everything from beachfront walking paths and forests to explore to epic play spaces and stunning gardens. Overwhelmed by the options? Start here to find the perfect park for your outdoor adventure from our Daily page.</p>

    <h3>Check out our Daily Seattle's Parks:</h3>

<ul>

    <li><a style="color:<?php 
    if($today == 'Monday') {
        echo 'pink';
    } else {
        echo 'blue';
    };
    ?>" href="daily.php?today=Monday">Monday</a></li>

    <li><a style="color:<?php 
    if($today == 'Tuesday') {
        echo 'orange';
    } else {
        echo 'blue';
    };
    ?>" href="daily.php?today=Tuesday">Tuesday</a></li>

    <li><a style="color:<?php 
    if($today == 'Wednesday') {
        echo 'green';
    } else {
        echo 'blue';
    };
    ?>" href="daily.php?today=Wednesday">Wednesday</a></li>

    <li><a style="color:<?php 
    if($today == 'Thursday') {
        echo 'yellow';
    } else {
        echo 'blue';
    };
    ?>" href="daily.php?today=Thursday">Thursday</a></li>

    <li><a style="color:<?php 
    if($today == 'Friday') {
        echo 'black';
    } else {
        echo 'blue';
    };
    ?>" href="daily.php?today=Friday">Friday</a></li>

    <li><a style="color:<?php 
    if($today == 'Saturday') {
        echo 'red';
    } else {
        echo 'blue';
    };
    ?>" href="daily.php?today=Saturday">Saturday</a></li>

    <li><a style="color:<?php 
    if($today == 'Sunday') {
        echo 'purple';
    } else {
        echo 'blue';
    };
    ?>" href="daily.php?today=Sunday">Sunday</a></li>


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