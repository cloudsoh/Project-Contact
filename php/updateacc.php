<?php
		$con = mysql_connect("localhost","root","");
           mysql_select_db("contacts", $con);
		if(isset($_POST['edit'])){
				$e=$_GET['id'];
					
					  $fname=$_POST['fname'];
			          $lname=$_POST['lname'];
			          $password=$_POST['password'];
			          $cpassword=$_POST['cpassword'];
			    if($password==$cpassword){
				//updating database from your table
				$sql="UPDATE users set fname='$fname',lname='$lname',password='$password'
				where email='".$e."'";
				mysql_query($sql) or die('Error');
				header("Location: main.php");

			    }else{
			    	
			    	echo "Please double-check your password";
			    	echo "</br>";
			    	echo "Click <a href='accsetting.php'>here</a> back";
			    }
			         
				
			}
			?>
