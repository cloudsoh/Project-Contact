<?php
$con = mysql_connect("localhost","root","");
           mysql_select_db("contacts", $con);
$id = $_GET['id'];
//delete record based on selected id from delete.php
		$query = "Delete from info where info_id=$id";
		mysql_query($query);
		header("Location: contact.php");
?>
