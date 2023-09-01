<?php
  
  session_start();

 
  unset($_SESSION['SESS_MEMBER_ID']);
  unset($_SESSION['SESS_FIRST_NAME']);
  unset($_SESSION['SESS_EMAIL']);
?>

<!DOCTYPE html>
<html>
<head>
  <title>PORTAL :: USER LOGIN</title>
  <link rel="shortcut icon" href="main/images/pos.jpg">
  <link href="main/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
  <link rel="stylesheet" href="main/css/font-awesome.min.css">
  <style type="text/css">
    body {
      background-color: #D6ACE6;
      padding-top: 60px;
      padding-bottom: 40px;
    }
    .sidebar-nav {
      padding: 9px 0;
    }
  </style>
  <link href="main/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body style="background:url(img/studentlogin.jpg); background-size:cover;">

<div class="navbar navbar-inverse navbar-fixed-top ">
    <div class="navbar-inner">
      <div class="container-fluid ">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#"><b>HOSTEL PORTAL</b></a>
        <div class="nav-collapse collapse">

          <ul class="nav nav-tabs">
            <li><a href="user.php">
                Home
              </a></li>
            <li><a href="gallery.php">
                Gallery
              </a></li>
            <li><a href="about.php">
                About Us
              </a></li>
            <li><a href="contact.php">
                Contact Us
              </a></li>
          </ul>

          <ul class="nav pull-right">
            <li><a>
                <font color="orange"><i class="icon-calendar icon-large"></i></font>
                <?php
                $Today = date('y:m:d', time());
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>
              </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span4">
      </div>
    </div>
    <div id="login">
      <?php
      if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
        foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
          echo '<div style="color: red; text-align: center;">', $msg, '</div><br>';
        }
        unset($_SESSION['ERRMSG_ARR']);
      }
      ?>
      <form action="userlogin.php" method="post">
        <font style="font:bold 44px 'Aleo'; color:#fff;"><center>USER LOGIN</center></font>
        <br>
	
        <div class="input-prepend">
          <input style="height:40px;" type="text" name="username" placeholder="Username" required/><br>
        </div>
        <div class="input-prepend">
          <input type="password" style="height:40px;" name="password" placeholder="Password" required/><br>
        </div><br>
        <div class="qwe">
          <button class="btn btn-large btn-primary btn-block pull-right" href="dashboard.html" type="submit">
            <i class="icon-signin icon-large"></i> Login
          </button>
        </div>
        <br><br>
      </form>
      <button class="btn btn-primary "><a href="register.php">User Register</a></button>
      <button class="btn btn-primary "><a href="index.php">Admin Login</a></button>

     
    </div>
   
  </div>
  <style>
    .copyright-agileinfo {
      text-align: center;
      margin-top:180px;
      padding: 20px;
      color: white;
    }
  </style>
    <footer>
  <div class="text-center" style="background-color: rgba(9, 55, 183, 0.8); ">
    <p class="copyright-agileinfo"> &copy; 2023 | Hostel Portal. | All Rights Reserved | Developed by team - Innovision</p></div>
  </footer>
  
</body>
</html>
