<?php
// include('config.php');


if(isset($_GET['id'])) {
        $id = (int)$_GET['id'];
    
    } else {
        header('Location: movie.php');
    }

    $sql = 'SELECT * FROM movies WHERE movie_id = '.$id.' ';

    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql)or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
    
            $movie_name = stripcslashes($row['movie_name']);
            $director_name = stripcslashes($row['director_name']);
            $release_year = stripcslashes($row['release_year']);
            $genre = stripcslashes($row['genre']);
            $details = stripcslashes($row['details']);
            // will I add a colum?
            $feedback = '';
    
    
    
        } // close while loop
    
    
    
    } else {
        $feedback = 'Houston, we have a problem';
    }

    // include('./includes/header.php');

    ?>

    <div>
    <h2><?php echo $movie_name;?></h2>
    <img src="./images/movies/movie<?php echo $id;?>.jpg" alt="<?php echo $movie_name ;?>">
    <p> <?php echo $details;?>  </p>



    </div>




    