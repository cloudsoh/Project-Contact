<?php 
  include("login.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ez contact</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/index-style.css" rel="stylesheet">
</head>
<body>
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
      <a class="navbar-brand" href="#" style="margin-left:0px">Ez</a>
     <!--  <?php 
      echo $error5.$error6.$error7.$error8.$error9;
      ?> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="index-navbar" style="background-color:pink">
      <ul class="nav navbar-nav">
        <li><a href="#">Features</a></li>
      </ul>
      <form class="navbar-form navbar-right" method="post" action="#">
        <div class="form-group">
        <?php if(isset($_SESSION['headererror'])){ $headererror=$_SESSION['headererror'];
            echo $_SESSION['headererror'];
            echo "<script type='text/javascript'>alert('$headererror');</script>";
            // "<script type='text/javascript'>alert('You did not select a book.');</script>";
            $_SESSION['headererror']=null;}
            ?>
          <label class="sr-only" for="loginemail">Email</label>
          <input type="email" name="lEmail" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="loginpw">Password</label>
          <input type="password" name="lpw" class="form-control" placeholder="Password">
        </div>
        <button type="submit" name="login"class="btn btn-default">Login</button>
      </form>

      <!-- <ul class="nav navbar-nav navbar-right">
      <form class="nav navbar-nav navbar-right">
      <div class="form-group">
        <li><input type="text" class="form-control" placeholder="Search"></li>
        </div>
        <li><button type="submit" class="btn btn-default">Submit</button></li>
        </form>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <div class="row">
    <div class="jumbotron col-sm-6 col-xs-12">
      <div class="container">
      <h1>
        Ez contact
      </h1>
      <p>
        #Best #Razer #Pink
      </p>
      </div>
    </div>
    <div class="col-sm-1">
    </div>
    <div class="col-sm-4 col-xs-12">
    <h1>Register</h1>
    <form method="post" action="#">
      <div class="form-group">
        <label for="labelfname">First Name</label>
        <input type="text" name="rFname" class="form-control" id="exampleInputEmail1" placeholder="John" value="<?php if(isset($_SESSION['entered_fname'])){echo $_SESSION['entered_fname'];}?>"><?php if(isset($error2)){ echo $error2;}?>
      </div>
      <div class="form-group">
        <label for="labellname">Last Name</label>
        <input type="text" name="rLname"class="form-control" id="exampleInputEmail1" placeholder="Cena"value="<?php if(isset($_SESSION['entered_lname'])){echo $_SESSION['entered_lname'];}?>"><?php if(isset($error1)){ echo $error1;}?>
      </div>
      <div class="form-group">
        <label for="labelemail">Email address</label>
        <input type="email" name="rEmail" class="form-control" id="exampleInputEmail1" placeholder="johncena@gmail.com" value="<?php if(isset($_SESSION['entered_email'])){echo $_SESSION['entered_email'];}?>"><?php if(isset($error3)){ echo $error3;}?>
      </div>
      <div class="form-group">
        <label for="labelpw">Password</label>
        <input type="password" name="rpw1" class="form-control" id="exampleInputPassword1" placeholder="********"><?php if(isset($error4)){ echo $error4;}?>
      </div>
      <div class="form-group">
        <label for="labelpw">Confirm Password</label>
        <input type="password" name="rpw2" class="form-control" id="exampleInputPassword1" placeholder="********">
      </div>
      <div class="form-group">
        <!-- <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile"> -->
        <p class="help-block">Example block-level help text here.</p>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
      <button type="submit" name="register" class="btn btn-default">Register</button>
      <?php if(isset($success)){echo  $success; }?>
    </form>
    </div>
  </div>
</div>
    
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>