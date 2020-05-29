<?php 
  include('functions.php');
  if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Superior Spotless</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/superslides.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="css/register.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body >

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-5"></div>
    <div class="col-sm-4"><img src="img/logo.JPG" id="logo"></div>
    <div class="col-sm-4"></div>
  </div>
</div>

<nav id="navigation" class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">SUPERIOR SPOTLESS</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="about.html">ABOUT <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.html">BOOKING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.html">SERVICE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" class="dropdown-toggle" data-toggle="dropdown" href="#">LAST NEWS<span class="caret"></span></a>
            <ul class="dropdown-menu">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">REGISTER</a>
          </li>
          <li class="nav-item" class="dropdown">
            <a class="nav-link" href="contact.html">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="features.html">FEATURES</a>
          </li>
        </ul>
      </div>

    </nav>
<!--  Slider -->
  <div id="slides">

    <div class="overlay"></div>

    <div class="slides-container">
        <img src="img/slide1.jpg" alt="">
        <img src="img/slide2.jpg" alt="">
        <img src="img/slide3.jpg" alt="">
    </div>

    <div class="titleMessage">
      <div class="heading">
        <p class="main">SUPERIOR SPOTLESS</p>
        <p class="sub typed"></p>
      </div>
    </div>


    <nav class="slides-navigation">
        <a href="#" class="next"></a>
        <a href="#" class="prev"></a>
    </nav>


  </div>
<!--  Slider exit -->
 
<div class="header">
    <h2>Home Page</h2>
  </div>
  <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <!-- logged in user information -->
    <div class="profile_info">
      <img src="img/user_profile.png"  >

      <div>
        <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="index.php?logout='1'" style="color: red;">logout</a>
          </small>

        <?php endif ?>
      </div>
    </div>
  </div>
<div class="copyrightSection">
    <div class="col-md-12 text-center">
      <p>&copy; Copyright SUPERIOR SPOTLESS 2020</p>

    </div>

<script src="js/script.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://unpkg.com/isotope-layout@3.0.5/dist/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/jquery.superslides.min.js"></script>
<script>
  
</body>

</html>
