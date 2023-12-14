<?php

session_start();

include('config.php');
include('./includes/login-header.php');

// connecting to the database:
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//asking if reg_user isset by useing mysqli_real_escape_string function:
if(isset($_POST['reg_user'])) {

    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
    $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);


    if(empty($first_name)) {
        array_push($errors, 'First name is required');
    }

    if(empty($last_name)) {
        array_push($errors, 'Last name is required');
    }

    if(empty($email)) {
        array_push($errors, 'Email is required');
    }

    if(empty($username)) {
        array_push($errors, 'Username is required');
    }

    if(empty($password1)) {
        array_push($errors, 'Password is required');
    }


    if($password1 !== $password2) {
        array_push($errors, 'Passwords do not match!');
    }

    $user_check_query = "SELECT * FROM final_users WHERE username = '$username' OR email = '$email' LIMIT 1" ;

    $result = mysqli_query($iConn, $user_check_query)or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($result);

    // we can only have one unique email, or one unique username:

    if($rows) {

        if($rows['username'] == $username) {
            array_push($errors, 'Username already exists!');
        }

        if($rows['email'] == $email) {
            array_push($errors, 'Email already exists!');
        }

    }

    // if there are NO errors, life is very good:

    if((int)$errors == 0) {

        $password = md5($password1);
    
        // logically - we have to insert the information into our database
    
        $query = "INSERT INTO final_users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password') ";
    
        mysqli_query($iConn, $query);
    
        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;
    
        header('Location:login.php');
    
        }


} // close if isset reg_user


//asking if login_user isset 
if(isset($_POST['login_user'])) {

    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($username)) {
        array_push($errors, 'Username is required');
    }

    if(empty($password)) {
        array_push($errors, 'Password is required');
    }


    if(count($errors) == 0) {

        $password = md5($password);

        // we are going to query our users table to make sure our username and password match

        $query = "SELECT * FROM final_users WHERE username = '$username' AND password = '$password' ";

        $results = mysqli_query($iConn, $query);

        if(mysqli_num_rows($results) == 1) {

            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            // if the above is successful, we will be directed to the index.php!!

            header('Location:index.php');
        } else {

            array_push($errors, 'Wrong username/password combo!!');
        }



    } // end count errors

}