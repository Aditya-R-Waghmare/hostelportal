<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href="main/images/pos.jpg">

  <link href="main/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">

  <link rel="stylesheet" href="main/css/font-awesome.min.css">
  <title>Contact Us</title>

<style>
    body{
        background-color: whitesmoke;
    }
   
body, header, footer, h1, h2, p, form, input, textarea, button {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

header {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
  margin-top: 24px;
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

form {
  margin-top: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input,
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

textarea {
  resize: vertical;
}

button {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #555;
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
            <li><a href="gallery5.php">
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
    <h1>Contact Us</h1>
  </header>
  <div class="container">
    <div class="content">
      <h2>Get in Touch</h2>
      <p>Have any questions or inquiries? Fill out the form below and we'll get back to you as soon as possible.</p>
      <form action="savecontact.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
  <footer>
  <p>&copy; 2023 | Hostel Portal. | All Rights Reserved | Developed by team - Innovision</p>
  </footer>
</body>
</html>
