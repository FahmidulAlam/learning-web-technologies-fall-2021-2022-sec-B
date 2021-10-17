<?php
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html> 
<html> 
<body>
 
<form method="post" action="loginValidate.php">
    <fieldset>
        <legend> <b>WELCOME Anne!</b> </legend>

        <a href="userProfile.php"> Profile </a><br>
        <a href="changePassword.php"> Change Password </a><br>
        <a href="logout.php"> Logout </a><br>

    </fieldset>
    
</form>
</body>
</html>

<?php
 
 }else{
 	header('location: login.html');
 }

?>