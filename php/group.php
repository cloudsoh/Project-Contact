<?php 
  include("session.php");
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ez contact</title>
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
    <div class="jumbotron">
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
         <li ><a href="contact.php">Contacts</a></li>
        <!-- <?php echo $_SESSION['login_user'];?> -->
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
      <div class="btn-group-vertical" role="group" aria-label="...">
  <?php
      $con = mysql_connect("localhost","root","");
           mysql_select_db("contacts", $con);
      $e = $_SESSION['login_user'];
      $Astatus = "Favourite";
      $Bstatus = "Friends";
      $Cstatus = "Family";
      $favourite = mysql_query("select * from info where grouptype='$Astatus' ");
      $friends = mysql_query("select * from info where grouptype='$Bstatus' ");
      $family = mysql_query("select * from info where grouptype='$Cstatus' ");
      $locate =mysql_query("select * from info where user='$e'");
?>
      <div class="btn-group" role="group"> 
      <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Favourite
      </button>
      <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
<?php
      while($rows=mysql_fetch_array($favourite)){?>
      
        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <?php echo $rows['name'];?>
      </button>
      </ul>
      <?php
      }
      ?>
      </div>



</div>


     

<?php
      while($rows=mysql_fetch_array($locate)){?>
      
      <div class="btn-group" role="group"> 
      <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <?php echo $rows['name'];?>
      </button>
        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
          <li>
            <a href="#">Send Message</a>
          </li>
          <li style="cursor:pointer;">
            <a data-toggle="modal" data-target="#exampleModal" data-name="<?php echo $rows['name'];?>" data-number="<?php echo $rows['phone'];?>" data-address="<?php echo $rows['address'];?>" data-birthday="<?php echo $rows['birthday'];?>" data-company="<?php echo $rows['company'];?>">View Details</a>
          </li>
          <li>
            <a href="#">Delete Contact</a>
          </li>
        </ul>
      </div>
         <?php
        }        
    ?>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Details</h4>
      </div>
      <div class="modal-body">
        <table class="table">
          <tr>
            <th>Name:</th>
            <td class="mname"></td>
          </tr>
          <tr>
            <th>Number:</th>
            <td class="mnumber"></td>
          </tr>
          <tr>
            <th>Address:</th>
            <td class="maddress"></td>
          </tr>
          <tr>
            <th>Birthday:</th>
            <td class="mbirthday"></td>
          </tr>
           <tr>
            <th>Company:</th>
            <td class="mcompany"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>
    </div>
   

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/app.js"></script>
    <script>
    $(document).ready(function(){
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);; // Button that triggered the modal
      var name = button.data('name'); // Extract info from data-* attributes
      var number = button.data('number');
      var address = button.data('address');
      var birthday = button.data('birthday');
      var company = button.data('company');
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      modal.find('.modal-title').text('Details of ' + name);
      // modal.find('.modal-body input').val(recipient);
      modal.find('.modal-body .mname').html(name);
      modal.find('.modal-body .mnumber').html(number);
      modal.find('.modal-body .maddress').html(address);
      modal.find('.modal-body .mbirthday').html(birthday);
      modal.find('.modal-body .mcompany').html(company);
    }); 
  });
    </script>
  </body>
</html> 