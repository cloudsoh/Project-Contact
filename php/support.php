<?php 
  include("session.php");
  // if(isset($_GET['a'])){//if clicked on somebody profile
  //     $thisid=$_GET['a'];
  //     $aquery="select * from users where userid='$thisid'";
  //     $aquery=mysql_query($aquery, $connection);
  //     $row1 = mysql_fetch_assoc($aquery);
  //     $thisemail = $row1['email'];
  //     $thisfname = $row1['fname'];
  //     $thislname = $row1['lname'];
  //     $thisdesc = $row1['description'];
  // }
  // $locationid=$_GET['a'];
  // $db1 = new mysqli("localhost", "root", "", "contacts");
  // if(isset($_POST['postbtn'])){
  //     $newpost=$_POST['textbox'];
  //     $userid=$_SESSION['users_id'];
  //     date_default_timezone_set("Asia/Singapore");//set timezone
  //     $time1=date("Y-m-d H:i:s");//get current time with this format
  //     $time=$time1;
  //     $content=$newpost;
  //     $upposts="insert into posts (userid,locationid,time,content)values('$userid','$locationid','$time','$content')";
  //     $insert_result=$db1->query($upposts);
      
  // }
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Customer Support</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="../css/bootstrap-theme.min.css"> -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href='../css/style.css' rel='stylesheet'>

  </head>
  <body>
    <!-- <div class="menu">
      
      <div class="icon-close">
        <img src="../images/close.png">
      </div>
      
      <ul>
        <li><a href="#">Yw</a></li>
        <li><a href="#">Nong</a></li>
      </ul>
    </div> -->
    <!-- Main body -->
    
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#index-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand icon-menu" href="#">Chat</a> -->
      <a class="navbar-brand" href="main.php" style="margin-left:0px">Ez Home</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="index-navbar" style="background-color:pink">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Features <span class="sr-only">(current)</span></a></li> -->
        <!-- <?php echo $_SESSION['login_user'];?> -->
        <li ><a href="contact.php">Contacts</a></li>
      </ul>
      <?php if(isset($login_email)){?><ul class="nav navbar-nav navbar-right"><li><a href="profile.php?a=<?php echo $login_id;?>" class="navbar-link"><?php echo $login_fname .' '. $login_lname;?></a></li><?php }?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="access.php">Account Settings</a></li>
            <!-- <li><a href="#">Privacy Settings</a></li> -->
            <!-- <li><a href="#">Something else here</a></li> -->
            <li role="separator" class="divider"></li>
            <li><a href="support.php">Customer Support</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Log out</a></li>
          </ul>
        </li>
      </ul>
      </div>
      </div>
      </nav>
      <div class="row">
      <div class="col-md-3">
      </div>

      <div class="col-sm-12 col-md-6">
      <!-- <input type="text" class="form-control" name="user" value="<?php echo $_SESSION['login_user'];?>"readonly></td>
      </br>
      <input type="text" class="form-control" value='<?php echo $login_fname .' '. $login_lname;?>'name="name" readonly></td>
      </br> -->
      <center><h1>Customer Support</h1></center>
      <input list="feedbacktype" class="form-control status-box" name="feedbacktype" placeholder="Choose Feedback Type"required><br>

  <datalist id="feedbacktype">
    <option value="Feedback"></option>
    <option value="Bug Report"></option>
    <option value="Ask Question"></option>
   
  </datalist>
      <form method="post" action="#">
        <div class="form-group">
          <textarea class="form-control status-box" rows="2" name="textbox" placeholder="Type Your Message Here"required></textarea>
        </div>
      
      <div class="button-group pull-right">
        <p class="counter">140</p>
        <button type="submit" id="post" name="postbtn" class="btn btn-primary">Send</button>
       
      </div>
      </form>

    
    </div>
      </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/app.js"></script>
    
  </body>
</html> 