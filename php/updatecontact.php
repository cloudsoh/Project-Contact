<?php
		$con = mysql_connect("localhost","root","");
           mysql_select_db("contacts", $con);
		if(isset($_POST['edit'])){
				$id=$_GET['id'];
					
					  $user=$_POST['user'];
			          $name=$_POST['name'];
			          $phone=$_POST['phone'];
			          $phonetype=$_POST['phonetype'];
			          $address=$_POST['address'];
			          $birthday=$_POST['birthday'];
			          $company=$_POST['company'];
			          $note=$_POST['note'];
				//updating database from your table
				$sql="UPDATE info set user='$user',name='$name',phone='$phone',phonetype='$phonetype',address='$address',birthday='$birthday',company='$company',note='$note' 
				where info_id='".$id."'";
				mysql_query($sql) or die('Error');
				header("Location: contact.php");
			}
			?>
