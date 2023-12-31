<html>

<head>
  <title>PORTAL ::STUDENT REG.</title>
  <link rel="shortcut icon" href="main/images/pos.jpg">

  <link href="main/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">

  <link rel="stylesheet" href="main/css/font-awesome.min.css">
  <style type="text/css">
    body {
      padding-top: 100px;
      background: url(img/studentreg.jpg);
      background-size: cover;
      text-align: right;
      
    }

    .sidebar-nav {
      padding: 9px 0;
    }

    .design {
      font-weight: bold;
    }
  </style>
  <link href="main/css/bootstrap-responsive.css" rel="stylesheet">

  <script type="text/javascript">
    $(document).ready(function() {

      $('#first_form').submit(function(e) {
        e.preventDefault();
        var name = $('name').val();
        var number = $('number').val();
        var email = $('email').val();
        var password = $('password').val();

        $(".error").remove();

        if (name.length < 6) {
          $('name').after('<span class="error">This field is required</span>');
        }
        if (number.length < 10) {
          $('number').after('<span class="error">This field is required</span>');
        }
        if (email.length < 1) {
          $('email').after('<span class="error">This field is required</span>');
        } else {
          var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
          var validEmail = regEx.test(email);
          if (!validEmail) {
            $('email').after('<span class="error">Enter a valid email</span>');
          }
        }
        if (password.length < 8) {
          $('password').after('<span class="error">Password must be at least 8 characters long</span>');
        }
      });

    });
    s
  </script>
  <link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>

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
            <li><a href="index.php">
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

  <div style="margin-right: 100px;">
    <form id="first_form" action="saveuser.php" method="post" enctype="multipart/form-data">
      <font style=" font:bold 25px 'Aleo'; color:#fff; margin-right:70px;"><i class="icon-edit icon-large"></i> New User Registration</font>
      <br><br><br><br>
      <div id="ac">
        <div class="input-prepend">
          <font color="#fff">
            <input type="hidden" name="memi" value="<?php echo $id; ?>" />

            <span class="design">Name : </span><input type="text" style="width:350px; height:40px;" placeholder="Enter Students Name" name="name" id="name" minlength="" Required /><br><br>

            <span class="design">Mobile Number: </span><input type="text" style="width:350px; height:40px;" placeholder="Mobile Number" name="number" id="number" minlength="10" maxlength="10" Required /><br><br>

            <span class="design">Username : </span><input type="text" style="width:350px; height:40px;" placeholder="Enter Username (min 4)" name="username" minlength="4" maxlength="12" required /><br><br>

            <span class="design">Password : </span><input type="password" style="width:350px; height:40px;" placeholder="Enter User's Password (min 4)" name="password" id="password" required minlength="4" maxlength="12" /><br><br>

            <span class="design">Image: </span><input type="file" style="width:350px; height:50px; color:BLACK" name="file" id="file" required/><br><br><br>

        </div>
      </div>
      <div>
        </font>
        <button class="btn btn-large btn-primary" style="width:140px; margin-right:0px;"><i class="icon-signin icon-large"></i> Enroll User<button>
        <button class="btn btn-large btn-primary" style="width:140px; margin-right:25px;"><i class="icon-signin icon-large"></i><a href="user.php">User Login</a></button>
      </div>
    </form>
  </div>

  <style>
    .copyright-agileinfo {
      text-align: center;
      margin-top: 90;
      padding: 20;
      color: white;
    }
  </style>
  <footer>
  <div class="text-center" style="background-color: rgba(9, 55, 183, 0.8); ">
    <p class="copyright-agileinfo"> &copy; 2023 | Hostel Portal. | All Rights Reserved | Developed by team - Innovision</p></div>
  </footer>

</body>

</html>