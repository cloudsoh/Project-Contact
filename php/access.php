<?php
	include("session.php");

	// $password="select password from users where email='$login_email'";
	// mysql_query($password);
?>

 <!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
	var val = "<?php echo $login_password;?>";
    var person = prompt("Please enter your password", "Password");
    if (person==val) {
       window.location.replace("accsetting.php");
    }else{
    	alert("Password is wrong!");
    	window.history.back();
    }

</script>

</body>
</html>
