<?php
session_start();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
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
  <link rel="stylesheet" href="courses.css">
</head>

<body>

  <!-- top-banner -->


  <!-- nav-bar -->
  <nav>
    <div class=" man-nav flex">
      <a href="#" class="company-logo container">
        <!-- <img src="./assets/asset 1.png" alt="company-logo"> -->
        <h1>EduNurture</h1>
      </a>
      <div class="nav-links container">
        <ul class="flex">
          <li><a href="cwelcome.php" class="hover-link">Home</a></li>
          <li><a href="aboutc.php" class="hover-link">About us</a></li>
          <li><a href="coursesc.php" class="hover-link">Courses</a></li>
          <li><a href="coachic.php" class="hover-link">Coaching</a></li>
          <!-- <li><a href="login.html" class="hover-link secondary-button">Sign in</a></li>
          <li><a href="registration.html" class="hover-link primary-button">Sign up</a></li> -->
          <li><a href="cprofile.php" class="hover-link secondary-button">
              <?php echo $_SESSION["coaching_Name"] ?>
            </a></li>
        </ul>

      </div>
    </div>
  </nav>
  <header>
    <div class="container header-section flex1">
      <a href="#" class="hover-link">
        <div class="header-right">
          <h1>JEE</h1>
        </div>
      </a>
      <a href="#" class="hover-link">
        <div class="header-right">
          <h1>NEET</h1>
        </div>
      </a>

    </div>
  </header>


  </div>
  </div>

  <div class="header-right container">
    <h1>TOP JEE COACHINGS</h1>
  </div>

  <div class="flex container">

    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Kalpriksh</b></h4>
        <p>JEE</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Catalyzer</b></h4>
        <p>JEE</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Aayam</b></h4>
        <p>JEE</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Allen</b></h4>
        <p>JEE</p>
      </div>
    </div>
  </div>

  <div class="flex container">
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Budhijivi</b></h4>
        <p>JEE</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Akash Byju's</b></h4>
        <p>JEE</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Physics Wallha</b></h4>
        <p>JEE</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>More</b></h4>
        <p>JEE</p>
      </div>
    </div>
  </div>



  <div class="header-right container updown">
    <h1>TOP NEET COACHINGS</h1>
  </div>

  <div class="flex container">

    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Kalpriksh</b></h4>
        <p>NEET</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Catalyzer</b></h4>
        <p>NEET</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Aayam</b></h4>
        <p>NEET</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Allen</b></h4>
        <p>NEET</p>
      </div>
    </div>
  </div>

  <div class="flex container">
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Budhijivi</b></h4>
        <p>NEET</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Akash Byju's</b></h4>
        <p>NEET</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Physics Wallha</b></h4>
        <p>NEET</p>
      </div>
    </div>
    <div class="card">
      <img src="user_456212.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>More</b></h4>
        <p>NEET</p>
      </div>
    </div>
  </div>


</body>

</html>