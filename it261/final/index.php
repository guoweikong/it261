<?php  
session_start();
include('config.php');
include('./includes/header.php');
?>

    <!-- my wrapper starts here -->
    <div id="index_wrapper">
    <!-- we need welcome you to the homepage-->
    <h1>The Best Places to Retire</h1>
    <h3>Start planning now.</h3>
    

        <div id="hero">
            <?php echo random_images($photos) ;?>
        </div>
        <!-- end hero -->
   
        <p>When it comes to choosing a place to retire, affordability is always key—after all, those savings accounts can drain pretty quickly if you aren't mindful. But it's also important to consider factors like healthcare quality and safety, as well as recreational opportunities, weather, walking scores, and much more.</p>
    </div>
    <!-- end wrapper -->
    
    <?php include('./includes/footer.php');?>