<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>About Us</title>
  <link rel="shortcut icon" href="main/images/pos.jpg">

  <link href="main/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">

  <link rel="stylesheet" href="main/css/font-awesome.min.css">

  <style>
    body {

      background-color: whitesmoke;
    }

    body,
    header,
    footer,
    h1,
    h2,
    p {
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
    }

    .cont {
      display: flex;

    }

    .box{
      width: 20%;
    }
    .cont img {
      width: 100%;
      height: 200px;
      border-radius: 50%;
    }

    header {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
      margin-top: 25px;
    }

    h1 {
      color: #333;
      font-size: 28px;
    }

    .content {
      margin-top: 20px;
    }

    h2 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      color: #666;
      margin-bottom: 15px;
    }

    footer {
      background-color: #f2f2f2;
      padding: 10px;
      text-align: center;
      margin-top: 20px;
    }
  </style>

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

  <header>
    <h1>About Us</h1>
  </header>
  <div class="container">
    <img src="img/hostel-banner.jpg" alt="">
    <div class="content">
      <h2>Welcome to our Hostel Portal</h2>
      <p>This project is aimed at developing a system for keeping records and showing
        information about or in a hostel. This system will help the hostel officer to be able to manage the
        affairs of the hostel. This system will provide full information abouta student in the hostel.
      </p>
      <p>As the name specifies “HOSTEL PORTAL” is a software developed for managing various activities
        in the hostel. For the past few years the number of educational institutions is increasing rapidly.
        Thereby the number of hostels is also increasing for the accommodation of the students studying in
        this institution. And hence there is a lot of strain on the person who are running the hostel and
        software’s are not usually used in this context. This particular project deals with the problems on
        managing a hostel and avoids the problems which occur when carried manually.
      </p>
      <p>The "Hostel Portal" software application will effectively organize and replace outdated paperbased
        record-keeping methods. Our project focuses on automating hostel management tasks to
        ensure smooth operations, facilitate easy updates and modifications, and provide accurate
        calculations and accounting processes.</p>
    </div>

    <div class="container">
      <h3 style="text-align: center;">Developers Team</h3>
      <div style="font-weight: bold;">Team Name: Innovision </div>
      <br>
      <div style="font-weight: bold;">Team Members: </div>
      <br>
      <div class="cont">
        <div style="text-align: center;" class="box">
          <img src="img/Aditya4.jpg" alt="">
          <h4>Aditya Waghmare</h4>
          <a href="https://www.linkedin.com/in/aditya-waghmare-491702203/" target="_blank">LinkedIn</a>
        </div>
        <div style="text-align: center;" class="box">
          <img src="img/Ritesh.jpg" alt="">
          <h4>Ritesh Jadhav</h4>
          <a href="https://www.linkedin.com/in/ritesh-jadhav-289026206/" target="_blank">LinkedIn</a>
        </div>
        <div style="text-align: center;" class="box">
          <img src="img/Ganesh.jpg" alt="">
          <h4>Ganesh Naiknavare</h4>
          <a href="https://www.linkedin.com/in/ganesh-naiknavare-a2a678223/" target="_blank">LinkedIn</a>
        </div>
        <div style="text-align: center;" class="box">
          <img src="img/Ghodke.jpeg" alt="">
          <h4>Aditya Ghodke</h4>
          <a href="https://www.linkedin.com/in/aditya-ghodke-093428177/" target="_blank">LinkedIn</a>
        </div>
        <div style="text-align: center;" class="box">
          <img src="img/Patil.jpg" alt="">
          <h4>Mahesh Patil</h4>
          <a href="https://www.linkedin.com/in/mahesh-patil-742904208/" target="_blank">LinkedIn</a>
        </div>

      </div>
    </div>
  </div>
  <footer>
    <p>&copy; 2023 | Hostel Portal. | All Rights Reserved | Developed by team - Innovision</p>
  </footer>
</body>

</html>