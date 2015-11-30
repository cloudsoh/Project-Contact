<?php 
  include("session.php");
  if(isset($_GET['a'])){//if clicked on somebody profile
      $thisid=$_GET['a'];
      $aquery="select * from users where userid='$thisid'";
      $aquery=mysql_query($aquery, $connection);
      $row1 = mysql_fetch_assoc($aquery);
      $thisemail = $row1['email'];
      $thisfname = $row1['fname'];
      $thislname = $row1['lname'];
      $thisdesc = $row1['description'];
  }
  $locationid=$_GET['a'];
  $db1 = new mysqli("localhost", "root", "", "contacts");
  if(isset($_POST['postbtn'])){
      $newpost=$_POST['textbox'];
      $userid=$_SESSION['users_id'];
      date_default_timezone_set("Asia/Singapore");//set timezone
      $time1=date("Y-m-d H:i:s");//get current time with this format
      $time=$time1;
      $content=$newpost;
      $upposts="insert into posts (userid,locationid,time,content)values('$userid','$locationid','$time','$content')";
      $insert_result=$db1->query($upposts);
      
  }
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $thisfname .' '. $thislname;?><?php ?></title>
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
    <div class="menu">
      <!-- Menu icon -->
      <div class="icon-close">
        <img src="../images/close.png">
      </div>
      <!-- Menu -->
      <ul>
        <li><a href="#">Yw</a></li>
        <li><a href="#">Nong</a></li>
      </ul>
    </div>
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
      <a class="navbar-brand icon-menu" href="#">Chat</a>
      <a class="navbar-brand" href="main.php" style="margin-left:0px">Ez Home</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="index-navbar" style="background-color:pink">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Features <span class="sr-only">(current)</span></a></li>
        <!-- <?php echo $_SESSION['login_user'];?> -->
      </ul>
      <?php if(isset($login_email)){?><ul class="nav navbar-nav navbar-right"><li><a href="profile.php?a=<?php echo $login_id;?>" class="navbar-link"><?php echo $login_fname .' '. $login_lname;?></a></li><?php }?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account Settings</a></li>
            <li><a href="#">Privacy Settings</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Customer Support</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Log out</a></li>
          </ul>
        </li>
      </ul>
      </div>
      </div>
      </nav>
      <div class="row">
      <div class="col-sm-12 col-md-3">
        <div class="thumbnail">
          <img class="img-responsive" src="../images/android.png" alt="Profile Pictures" style="height:200px">
          <div class="caption">
            <h3><?php echo $thisfname . " " . $thislname;?></h3>
            <p><?php echo $thisdesc;?></p>
            <p>
              <a href="#" class="btn btn-primary" role="button">Button</a>
              <a href="#" class="btn btn-default" role="button">Button</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-5">
      <form method="post" action="#">
        <div class="form-group">
          <textarea class="form-control status-box" rows="2" name="textbox" placeholder="What's on your mind?"></textarea>
        </div>
      
      <div class="button-group pull-right">
        <p class="counter">140</p>
        <button  type="submit" id="post" name="postbtn" class="btn btn-primary">Post</button>
       
      </div>
      </form>
     <ul class="posts">
        <?php
          $checkpost="select a.fname, a.lname, a.userid, b.time as time, b.content as content from posts as b left join users as a on a.userid=b.userid where locationid='$locationid' order by b.time desc";
          $result=$db1->query($checkpost);
          $no = 1;
          while($postrow=$result->fetch_array()){?>
          <li>
            <div style='float:left'>
              <a href='profile.php?a=<?php echo $postrow['userid'];?>'>
                <?php echo $postrow['fname'];?>&nbsp;<?php echo $postrow['lname'];?>
              </a>
            </div>
            <div style='float:right'><?php echo $postrow['time']; ?></div><br><?php echo $postrow['content'];?>
          </li>
          <?php }?>
      </ul>
      
    </div>
    </div>
      

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/app.js"></script>
    
  </body>
</html> 