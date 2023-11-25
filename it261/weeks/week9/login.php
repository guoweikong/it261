<?php
include('server.php');
// eventually we will be connecting to our header include
// include('./includes/header.php');

?>


<h1>Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<!--  username, password -->


<lavel>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

<lavel>Password</label>
<input type="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']) ;?>">


<button type="submit" name="login_user" class="btn">Login</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>' ">Reset </button>


</form>
<p>Not yet a member? <a href="register.php">Sign up</a></p>

<?php
include('errors.php') ;?>