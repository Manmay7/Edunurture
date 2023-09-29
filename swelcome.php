<?php
session_start();

if ( !isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
  header("location: index.html");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My website</title>
  <link rel="stylesheet" href="style.css ">
</head>

<body>
  <nav class="top_bar">

    <div class="container man-nav flex">
      <a href="#" class="company-logo">
        <!-- <img src="./assets/asset 1.png" alt="company-logo"> -->

        <h1>EduNurture</h1>
      </a>
      <div class="nav-links">
        <ul class="flex">
          <li><a href="swelcome.php" class="hover-link">Home</a></li>
          <li><a href="abouts.php" class="hover-link">About us</a></li>
          <li><a href="coursess.php" class="hover-link">Courses</a></li>
          <li><a href="coachis.php" class="hover-link">Coaching</a></li>
          <!-- <li><a href="login.html" class="hover-link secondary-button">Sign in</a></li>-->
          <li class="">
          <li><a href="sprofile.php"> <img src="user_456212.png" width="40px" height="40px"></li>
            <?php echo "Welcome " . $_SESSION["username"] ?>
          </li>
          </a>
          <li><a href="slogout.php" class="hover-link primary-button">Logout</a></li>
        </ul>

      </div>
    </div>
  </nav>

  <!-- header -->
  <header>
    <div class="container header-section flex">
      <div class="header-left">
        <h1>Welcome to EduNurture!</h1>
        <p>At EduNurture, we are dedicated to nurturing your educational aspirations and guiding you towards success in
          the competitive world of JEE and NEET examinations. Our platform is designed to be your one-stop destination
          for discovering and connecting with a multitude of coaching institutes that specialize in JEE (Joint Entrance
          Examination) and NEET (National Eligibility cum Entrance Test) preparation.</p>
        <ul>
          <li><a href="search.html" class="hover-link primary-button get-started-btn">Get Started</a></li>
        </ul>

      </div>
      <div class="header-right">
        <img src="university_teaching.jpg" alt="image">
      </div>
    </div>
  </header>

  <!-- <section class="companies-section">
    <div class="container">
      <div class="c-s-1">
        <p class="small-bold-text">The world’s best companies rely on UsabilityHub to make better design decisions.</p>
      </div>
    </div>
  </section> -->



  <section class="big-feature-section"></section>

  <section class="big-feature-section"></section>

  <section class="big-feature-section"></section>

  <sectiom class="example-section"></sectiom>

  <selection class="cta-section"></selection>

  <footer></footer>

  <div class="sub-footer"></div>





  <script src="https://kit.fontawesome.com/6458146f7e.js" crossorigin="anonymous"></script>
</body>

</html>