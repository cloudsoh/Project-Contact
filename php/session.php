<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("contacts", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from users where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_email =$row['email'];
$login_fname=$row['fname'];
$login_lname=$row['lname'];

if(!isset($user_check)){
header("location: index.php");
}
if(!isset($login_email)){
mysql_close($connection); // Closing main_loginn
header('Location: index.php'); // Redirecting To Home cairo_pattern_get_extend(pattern)
}
if(isset($_SESSION['logout'])){
	
}
?>