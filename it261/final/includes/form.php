<?php

ob_start();

$cities = '';
$first_name = '';
$last_name ='';
$email = '';
$gender = '';
$phone= '';
$comments ='';
$privacy ='';
$regions ='';




$cities_err = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$comments_err ='';
$privacy_err ='';
$regions_err ='';



if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(empty($_POST['cities'])) {
        $cities_err = 'Please choose your favorite cities.';
    } else {
        $cities = $_POST['cities'];
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


    function my_cities($cities) {
        $my_return ='';
        if(!empty($_POST['cities'])) {
            $my_return = implode(',' , $_POST['cities']);
        }
        return $my_return;
    }

    if(isset($_POST['first_name'],
             $_POST['last_name'],
             $_POST['email'],
             $_POST['gender'],
             $_POST['phone'],
             $_POST['cities'],
             $_POST['comments'],
             $_POST['regions'],
             $_POST['privacy'])) {

        $to = 'guoweikong2020@gmail.com'; 
        $subject = 'Test email on '.date('m/d/y, h i A');   
        $body = '
                First Name: '.$first_name.' '.PHP_EOL.'        
                Last Name: '.$last_name.' '.PHP_EOL.' 
                Email: '.$email.' '.PHP_EOL.' 
                Phone: '.$phone.' '.PHP_EOL.' 
                Gender: '.$gender.' '.PHP_EOL.' 
                Cities: '.my_cities($cities).' '.PHP_EOL.' 
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
            $cities &&
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

<label>Favorite Cities to live</label>
<ul>
<li><input type="checkbox" name="cities[]" value="charleston" <?php if(isset($_POST['cities']) && in_array('charleston', $cities)) echo 'checked="checked"' ;?>>Charleston</li>

<li><input type="checkbox" name="cities[]" value="orlando" <?php if(isset($_POST['cities']) && in_array('orlando', $cities)) echo 'checked="checked"' ;?>>Orlando</li>

<li><input type="checkbox" name="cities[]" value="cincinnati" <?php if(isset($_POST['cities']) && in_array('cincinnati', $cities)) echo 'checked="checked"' ;?>>Cincinnati</li>

<li><input type="checkbox" name="cities[]" value="miami" <?php if(isset($_POST['cities']) && in_array('miami', $cities)) echo 'checked="checked"' ;?>>Miami</li>

<li><input type="checkbox" name="cities[]" value="casper" <?php if(isset($_POST['cities']) && in_array('casper', $cities)) echo 'checked="checked"' ;?>>Casper</li>

<li><input type="checkbox" name="cities[]" value="salt_lake_city" <?php if(isset($_POST['cities']) && in_array('salt_lake_city', $cities)) echo 'checked="checked"' ;?>>Salt Lake City </li>

<li><input type="checkbox" name="cities[]" value="tampa" <?php if(isset($_POST['cities']) && in_array('tampa', $cities)) echo 'checked="checked"' ;?>>Tampa</li>

<li><input type="checkbox" name="cities[]" value="wilmington" <?php if(isset($_POST['cities']) && in_array('wilmington', $cities)) echo 'checked="checked"' ;?>>Wilmington</li>

<li><input type="checkbox" name="cities[]" value="scottsdale" <?php if(isset($_POST['cities']) && in_array('scottsdale', $cities)) echo 'checked="checked"' ;?>>Scottsdale</li>

<li><input type="checkbox" name="cities[]" value="fort_lauderdale" <?php if(isset($_POST['cities']) && in_array('fort_lauderdale', $cities)) echo 'checked="checked"' ;?>>Fort Lauderdale</li>

</ul>
<span><?php echo $cities_err ;?></span>

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