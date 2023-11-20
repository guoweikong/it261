<?php

ob_start();

$parks = '';
$first_name = '';
$last_name ='';
$email = '';
$gender = '';
$phone= '';
$comments ='';
$privacy ='';
$regions ='';




$parks_err = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$comments_err ='';
$privacy_err ='';
$regions_err ='';



if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(empty($_POST['parks'])) {
        $parks_err = 'Please choose your favorite parks.';
    } else {
        $parks = $_POST['parks'];
    }

    if(empty($_POST['first_name'])) {
        $first_name_err = 'Please fill in your first name.';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_err = 'Please fill in your last name.';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_err = 'Please fill in your email.';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        $gender_err = 'Please check your gender.';
    } else {
        $gender = $_POST['gender'];
    }


    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if
         

    if(empty($_POST['comments'])) {
        $comments_err = 'We value your input.';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err = 'You must agree to receive spam email.';
    } else {
        $privacy = $_POST['privacy'];
    }

    if($_POST['regions'] == NULL) {
        $regions_err = 'Please choose your region';
    } else {
        $regions = $_POST['regions'];
    }


    function my_parks($parks) {
        $my_return ='';
        if(!empty($_POST['parks'])) {
            $my_return = implode(',' , $_POST['parks']);
        }
        return $my_return;
    }

    if(isset($_POST['first_name'],
             $_POST['last_name'],
             $_POST['email'],
             $_POST['gender'],
             $_POST['phone'],
             $_POST['parks'],
             $_POST['comments'],
             $_POST['regions'],
             $_POST['privacy'])) {

        $to = 'szemeo@mystudentswa.com'; 
        $subject = 'Test email on '.date('m/d/y, h i A');   
        $body = '
                First Name: '.$first_name.' '.PHP_EOL.'        
                Last Name: '.$last_name.' '.PHP_EOL.' 
                Email: '.$email.' '.PHP_EOL.' 
                Phone: '.$phone.' '.PHP_EOL.' 
                Gender: '.$gender.' '.PHP_EOL.' 
                Parks: '.my_parks($parks).' '.PHP_EOL.' 
                Regions: '.$regions.' '.PHP_EOL.' 
                Comments: '.$comments.' '.PHP_EOL.' 
     
        ';   

        $headers = array(
            'From' => 'noreply@gmail.com'
        );

        if(!empty(
            $first_name &&
            $last_name &&
            $email &&
            $gender &&
            $parks &&
            $regions &&
            $phone &&
            $comments ) &&
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
                mail($to, $subject, $body, $headers);
                header('Location:thx.php');
            }

             }



} // closing server request method



?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<legend>
Contact Us
</legend>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])   ;?>">
<span><?php echo $first_name_err ;?></span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])   ;?>">
<span><?php echo $last_name_err ;?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])   ;?>">
<span><?php echo $email_err ;?></span>

<label>Gender</label>
<ul>
<li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female')  echo  'checked="checked"' ;?>>Female</li>

<li><input type="radio" name="gender" value="male" <?php  if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"' ;?>>Male</li>

<li><input type="radio" name="gender" value="neither" <?php  if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked="checked"' ;?>>Neither</li>

</ul>
<span><?php echo $gender_err ;?></span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars ($_POST['phone']) ;?>">
<span><?php echo $phone_err ;?></span>

<label>Favorite Parks</label>
<ul>
<li><input type="checkbox" name="parks[]" value="gas_works" <?php if(isset($_POST['parks']) && in_array('gas_works', $parks)) echo 'checked="checked"' ;?>>Gas Works Park</li>

<li><input type="checkbox" name="parks[]" value="alki" <?php if(isset($_POST['parks']) && in_array('alki', $parks)) echo 'checked="checked"' ;?>>Alki Beach Park</li>

<li><input type="checkbox" name="parks[]" value="golden_gardens" <?php if(isset($_POST['parks']) && in_array('golden_gardens', $parks)) echo 'checked="checked"' ;?>>Golden Gardens Park</li>

<li><input type="checkbox" name="parks[]" value="volunteer" <?php if(isset($_POST['parks']) && in_array('volunteer', $parks)) echo 'checked="checked"' ;?>>Volunteer Park</li>

<li><input type="checkbox" name="parks[]" value="discovery" <?php if(isset($_POST['parks']) && in_array('discovery', $parks)) echo 'checked="checked"' ;?>>Discovery Park</li>

<li><input type="checkbox" name="parks[]" value="seward" <?php if(isset($_POST['parks']) && in_array('seward', $parks)) echo 'checked="checked"' ;?>>Seward Park</li>

<li><input type="checkbox" name="parks[]" value="green_lake" <?php if(isset($_POST['parks']) && in_array('green_lake', $parks)) echo 'checked="checked"' ;?>>Green Lake Park</li>

</ul>
<span><?php echo $parks_err ;?></span>

<label>Regions</label>
<select name="regions">
<option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected="unselected"' ;?>>Select One</option>

<option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "nw") echo 'selected="selected"' ;?>>Northwest</option>

<option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sw") echo 'selected="selected"' ;?>>Southwest</option>

<option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "mw") echo 'selected="selected"' ;?>>Midwest</option>

<option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ne") echo 'selected="selected"' ;?>>Northeast</option>

<option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == "se") echo 'selected="selected"' ;?>>Southeast</option>

</select>
<span><?php echo $regions_err ;?></span>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
<span><?php echo $comments_err ;?></span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) &&$_POST['privacy'] == "yes") echo 'checked = "checked"' ;?>>Yes</li>
</ul>
<span><?php echo $privacy_err ;?></span>

<input type="submit" value="Send it">

<p><a href="">Reset</a></p>

</fieldset>
</form>