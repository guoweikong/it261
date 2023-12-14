<?php 
session_start();
include('config.php');
include('./includes/header.php');
?>



<div id="wrapper4">

<main>

    <h1 class="contact">The 10 Best Places to Retire in the US</h1>
    <img src="./images/main.jpg" alt="main image">
    <p>Read on for this year's top 10 best places to retire in the U.S. and decide where you'd like to hang your hat... or, more accurately, park your vintage convertible. (Hey, you deserve it.)</p>
    
    

</main>

<aside>
    <h3>Our Cities Listed Below:</h3>
    
<?php

    $sql = 'SELECT * FROM cities';

    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            echo '
           
            <p>Information about <a href="cities-view.php?id='.$row['city_id'].' "> '.$row['city_name'].', '.$row['state_name'].' </a></p>
            ';


        } // end while loop




    } else {
        echo 'No Cities!!';
    }


    @mysqli_free_result($result);

    @mysqli_close($iConn);


?>  



</aside>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');