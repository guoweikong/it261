<?php
session_start();
include('config.php');


if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: cities.php');
}

$sql = 'SELECT * FROM cities WHERE city_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        $city_name = stripcslashes($row['city_name']);
        $state_name = stripcslashes($row['state_name']);
        $population = stripcslashes($row['population']);
        $cost_of_living = stripcslashes($row['cost_of_living']);
        $income_tax = stripcslashes($row['income_tax']);
        $climate = stripcslashes($row['climate']);
        $crime = stripcslashes($row['crime']);
        $healthcare = stripcslashes($row['healthcare']);
        $details = stripcslashes($row['details']);
        // will I add a colum?
        $feedback = '';



    } // close while loop




} else {
    $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');

?>

<div id="wrapper4">
<main>
<h1>Welcome to Our City View Page</h1>
<h2>Introducing: <?php echo $city_name;?></h2>
<ul>
<?php
    echo'
    <li><b>City:</b> '.$city_name.' </li>
    <li><b>State:</b> '.$state_name.' </li>
    <li><b>Population:</b> '.$population.'</li>
    <li><b>Cost of living:</b> '.$cost_of_living.'</li>
    <li><b>Income tax:</b> '.$income_tax.'</li>   
    <li><b>Climate:</b> '.$climate.'</li> 
    <li><b>Crime:</b> '.$crime.'</li> 
    <li><b>Healthcare:</b> '.$healthcare.'</li> 
    ';
?>
</ul>


<p>Return to our <a href="cities.php">cities page!</a></p>

</main>

<aside>
<h3>Aside information that will display our city's image!</h3>

<img src="./images/city<?php echo $id;?>.jpeg" alt="<?php echo $city_name ;?>">
<p> <?php echo $details;?>  </p>

</aside>

</div>
<!-- end wrapper -->

<?php 

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');