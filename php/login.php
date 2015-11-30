<?php
session_start();
if (isset($_POST['login'])) {
if (empty($_POST['lEmail']) || empty($_POST['lpw'])) {//log in
$headererror = "Username or Password is invalid";
$_SESSION['headererror']=$headererror;
$error6="email or pw empty";
}
else
{
// Define $username and $password
$myusername=$_POST['lEmail'];
$mypassword=$_POST['lpw'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
if(! $connection)
{
    die('Connection Failed'.mysql_error());
    $error7 = "connection failed";
}
// To protect MySQL injection for Security purpose
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
// Selecting Database
$db = mysql_select_db("contacts", $connection);
// SQL query to fetch information of register users and finds user match.
$query = mysql_query("select * from users where email='$myusername' AND password='$mypassword'", $connection);
if($query)
  $total = mysql_num_rows($query);
else{
  die("something failed");
  $error5='query failed';
}

// $protocol = $_SERVER['HTTPS'] ? "https" : "http";
// $url = $protocol.'://'.$_SERVER['HTTP_HOST'];


$_SESSION['login_user']=$myusername;

if ($total == 1) {
  // Credentials match so we create session variables
    $row = mysql_fetch_assoc($query);
    $_SESSION['users_id'] = $row['userid'];
    $_SESSION['users_email'] = $row['email'];
    // $_SESSION['users_role'] = $row['users_role'];
    $_SESSION['users_fname'] = $row['fname'];
    $_SESSION['users_lname'] = $row['lname'];
    $_SESSION['headererror'] = NULL;
    // Initializing Session
  $url = 'main.php';    
}
else{
    $headererror = "Username or Password is invalid";
    $_SESSION['headererror']=$headererror;
    $error8="username or pw wrong";
    // If not, then redirect the user the login page with an error
    $url .= 'index.php';
}
header("Location: $url");
// $currentuser=$_SESSION['users_id'];
// $query4="SELECT * FROM books WHERE lenderID=$currentuser";//save book lent to session
//     if(isset($query4)){
//      echo $query4;
//      $result4=$db->query($query4); // run query
//     } //fetch array = mysql_fetch_assoc
// header("Location: $url");

mysql_close($connection); 
exit;
// Closing Connection
}
}else{$_SESSION['error9']="no press login";}
if(isset($_POST['login'])){$_SESSION['qqq']='qqq';}
$db = new mysqli("localhost", "root", "", "contacts");// connect database
if(isset($_POST['register'])){
    $_SESSION['entered_email']=$_POST['rEmail'];
    $_SESSION['entered_fname']=$_POST['rFname'];
    $_SESSION['entered_lname']=$_POST['rLname'];
    if(!empty($_POST['rFname'])){
      if(!empty($_POST['rLname'])){
        if(!empty($_POST['rEmail'])){
          $rEmail=$_POST['rEmail'];
          $rFname=$_POST['rFname'];
          $rLname=$_POST['rLname'];
          // $_SESSION['users_email']=$_POST['rEmail'];
          // $_SESSION['users_fname']=$_POST['rFname'];
          // $_SESSION['users_lname']=$_POST['rLname'];
          if(empty($_POST['rpw1'])&&empty($_POST['rpw2'])){
                $error4="Please double-check your password!";
              }else if(($_POST['rpw1']==$_POST['rpw2'])&&(!empty($_POST['rpw1']))){
                  $rpw1=$_POST['rpw1'];
                  $rpw2=$_POST['rpw2'];
                $check="select email from users where email='$rEmail'";
                $check2=$db->query($check);
                if(isset($check2)){
                  while($row2=$check2->fetch_array()){
                  $uemail=$row2['email'];
                }
              } if(!isset($uemail)){
                $update1="insert into users (fname,lname,email,password)values('$rFname','$rLname','$rEmail','$rpw1')";
                // $selection=$_POST['selection'];
                // foreach($selection as $select){
                //   if($select=1){
                //     $update1=$update1 . "'user')";
                //   }else if($select=2){
                //     $update1=$update1 . "'lecturer')";
                //   }
                // }
              $rEmail=stripslashes($rEmail);
              $rFname=stripslashes($rFname);
              $rLname=stripslashes($rLname);
              $rpw1=stripslashes($rpw1);
              $rpw2=stripslashes($rpw2);
              $rEmail = trim($rEmail);
              $rFname = trim($rFname);
              $rLname = trim($rLname);
              $rpw1 = trim($rpw1);
              $rpw2 = trim($rpw2);
              $rEmail = mysql_real_escape_string($rEmail);
              $rFname = mysql_real_escape_string($rFname);
              $rLname = mysql_real_escape_string($rLname);
              $rpw1 = mysql_real_escape_string($rpw1);
              $rpw2 = mysql_real_escape_string($rpw2);
              $debug = "OK";
              }else{$success="Username exists, please try again.";}
              }else{
                $error4="Please double-check your password";
              }
              
              if(isset($update1)){
              $update2=$db->query($update1);
              $success="You have successfully register!";
              }}
        else{ $error3="Please enter your E-mail.";$success="error3";}
      }else{ $error1="Please enter your last name.";$success="error1";}
    }else{ $error2="Please enter your first name.";$success="error2";}
  }
?>