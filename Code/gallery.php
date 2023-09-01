<!DOCTYPE html>
<html>
<head>
  <title>Gallery</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="main/images/pos.jpg">

  <link href="main/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">

  <link rel="stylesheet" href="main/css/font-awesome.min.css">

<style>

    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  margin-top: 25px;
  text-align: center;
}

.gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 20px;
}

.image {
  position: relative;
  margin: 15px;
}

.image img {
  width: 300px;
  height: 200px;
  object-fit: cover;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.image:hover .overlay {
  opacity: 1;
}

.text {
  color: #fff;
  font-size: 20px;
  text-align: center;
  padding: 10px;
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
    <h1>Gallery</h1>
  </header>
  
  <div class="gallery">
    <div class="image">
      <img src="img/hostel2.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Hostel building</div>
      </div>
    </div>

   
    <div class="image">
      <img src="img/room1.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Hostel Room</div>
      </div>
    </div>
    <div class="image">
      <img src="img/hostel3.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Hostel</div>
      </div>
    </div>

    
    <div class="image">
      <img src="img/room.jpg" alt="Image 2">
      <div class="overlay">
        <div class="text">Hostel Room</div>
      </div>
    </div>


    <div class="image">
      <img src="img/hostel6.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Hostel Room</div>
      </div>
    </div>


    <div class="image">
      <img src="img/hostel-banner.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Hostel building</div>
      </div>
    </div>
    <div class="image">
      <img src="img/hostel4.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Hostel</div>
      </div>
    </div>
    
    <div class="image">
      <img src="img/hostelout.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Hostel</div>
      </div>
    </div>

    <div class="image">
      <img src="img/MESS.jpg" alt="Image 1">
      <div class="overlay">
        <div class="text">Mess </div>
      </div>
    </div>

    
    
    <div class="image">
      <img src="img/mess1.jpg" alt="Image 3">
      <div class="overlay">
        <div class="text">Mess</div>
      </div>
    </div>
  </div>
</body>
</html>
