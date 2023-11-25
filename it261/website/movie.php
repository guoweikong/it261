<?php 
include('config.php');
include('./includes/header.php');
?>



<div id="wrapper4">

<main>

    <h1 class="contact">10 Extraordinary Movies Set In Seattle</h1>
    
    <?php

    $sql = 'SELECT * FROM movies';

    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            echo '
            <h3>'.$row['movie_name'].'</h3>

            <ul>
            <li>Directed by: '.$row['director_name'].'</li>
            <li>Release Year: '.$row['release_year'].'</li>
            <li>Genre: '.$row['genre'].'</li>
            </ul>

            <p>For more information about '.$row['movie_name'].', click <a href="movie.php?id='.$row['movie_id'].' ">here</a></p>
            ';


        } // end while loop




    } else {
        echo 'No Movies!!';
    }


    @mysqli_free_result($result);

    @mysqli_close($iConn);


?>  

</main>

<aside>




<?php
    if(isset($_GET['id'])) {
        // If 'id' parameter is set, include the movie-view.php content
        include('./movie-view.php');
    } else {
        // If 'id' parameter is not set, display a default image or content
        echo '<h2>Aside for Movies</h2>';
        echo '<img src="./images/default-movie.jpg" alt="Default Movie">';
        echo '<p>Seattle is a popular setting for films, whether the screenplay directly mentions Seattle or there is a requirement for panoramic vistas of evergreens. There are globally recognized attractions such as the Space Needle and Pike Place Market and breathtaking views and seemingly constant rain (which can be helpful for some stories).</p>';

        echo '<p>Before you visit the Emerald City, don\'t miss these movies set in Seattle for a proper education in local cinema before you pay a visit to the gem of the Pacific Northwest.</p>';
    }
    ?>

</aside>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');