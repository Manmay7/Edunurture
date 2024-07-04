<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My website</title>
  <link rel="stylesheet" href="coach.css">
</head>

<body>


  <!-- nav-bar -->
  <nav id="top_container" class="top_bar" width="100px">

    <div class=" man-nav flex" style="margin-left: 50px; margin-right:73px;">
      <a href="#" class="company-logo">
        <!-- <img src="./assets/asset 1.png" alt="company-logo"> -->

        <h1>EduNurture</h1>
      </a>
      <div class="nav-links">
        <ul class="flex">
          <li><a href="index.html" class="hover-link">Home</a></li>
          <li class=""><a href="about.html" class="hover-link">About us</a></li>
          <li><a href="courses.html" class="hover-link">Courses</a></li>
          <li><a href="coachi.php" class="hover-link">Coaching</a></li>
          <li><a href="studentr.html" class="hover-link secondary-button">Sign in</a></li>
          <li><a href="r.html" class="hover-link primary-button">Sign up</a></li>
        </ul>

      </div>
    </div>
  </nav>
  <header>
    <div class="container header-section flex">
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
  <div id="slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">
    <input type="radio" name="slider" id="slide4">
    <div id="slides">
      <div id="overflow">
        <div class="inner">
          <div class="slide slide_1">Harsh
            <div class="slide-content">
              <h2>Slide 1</h2>
              <p>Content for Slide 1</p>
            </div>
          </div>
          <div class="slide slide_2">
            <div class="slide-content">
              <!-- <h2>Slide 2</h2> -->
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="Allen.jpg">
              <p>Content for Slide 2</p>
            </div>
          </div>
          <div class="slide slide_3">
            <div class="slide-content">
              <h2>Slide 3</h2>
              <p>Content for Slide 3</p>
            </div>
          </div>
          <div class="slide slide_4">
            <div class="slide-content">
              <h2>Slide 4</h2>
              <p>Content for Slide 4</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
    </div>
    <div id="bullets">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
    </div>
  </div>



  <div class="container">

    <div class="container1">
      <div class="card">
        <img class="image" src="catalyser.jpg" alt="catalyser" style="width:100%">

        <p class="title">
          <?php
          $sql = "SELECT * FROM coaching where id=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['coaching_Name']; ?>
        </p>
        <p class="contactnumber">Contact Number :
          <?php
          $sql = "SELECT contact_Number FROM coaching where id=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['contact_Number']; ?>
        </p>
        <p class="email">Email :
          <?php
          $sql = "SELECT email FROM coaching where id=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['email']; ?>
        </p>
        <p class="rating">Rating :
          <?php
          $sql = "SELECT rating FROM ratings where cid=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['rating']; ?>
        </p>
        <p class="courses">Courses :
          <?php
          $sql = "SELECT coursename FROM courses where coachingid=1";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $courseNames[] = $row['coursename'];
          }
          foreach ($courseNames as $courseName) {
            echo $courseName . "<br>";
          } ?>
        </p>
        <div class="visit">
          <p class="visit">Visit <span>&rarr;</span></p>
        </div>
      </div>

      <div class="card">
        <div>
          <img class="image" src="allen2.jpeg" alt="catalyser" style="width:100%">

          <p class="title">
            <?php
            $sql = "SELECT * FROM coaching where id=2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['coaching_Name']; ?>
          </p>
          <p class="contactnumber">Contact Number :
            <?php
            $sql = "SELECT contact_Number FROM coaching where id=2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['contact_Number']; ?>
          </p>
          <p class="email">Email :
            <?php
            $sql = "SELECT email FROM coaching where id=2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['email']; ?>
          </p>
          <p class="rating">Rating :
            <?php
            $sql = "SELECT rating FROM ratings where cid=2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['rating']; ?>
          </p>
          <p class="courses">Courses :
            <?php
            $sql = "SELECT coursename FROM courses where coachingid=2";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              $courseNames2[] = $row['coursename'];
            }
            foreach ($courseNames2 as $courseName) {
              echo $courseName . "<br>";
            } ?>
          </p>
        </div>
        <div class="visit">
          <p class="visit">Visit <span>&rarr;</span></p>
        </div>
      </div>


      <div class="card">
        <img class="image" src="kal.jpg" alt="catalyser" style="width:100%">

        <p class="title">
          <?php
          $sql = "SELECT * FROM coaching where id=3";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['coaching_Name']; ?>
        </p>
        <p class="contactnumber">Contact Number :
          <?php
          $sql = "SELECT contact_Number FROM coaching where id=3";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['contact_Number']; ?>
        </p>
        <p class="email">Email :
          <?php
          $sql = "SELECT email FROM coaching where id=3";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['email']; ?>
        </p>
        <p class="rating">Rating :
          <?php
          $sql = "SELECT rating FROM ratings where cid=3";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['rating']; ?>
        </p>
        <p class="courses">Courses :
          <?php
          $sql = "SELECT coursename FROM courses where coachingid=3";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $courseNames1[] = $row['coursename'];
          }
          foreach ($courseNames1 as $courseName) {
            echo $courseName . "<br>";
          } ?>
        </p>
        <p class="visit">Visit <span>&rarr;</span></p>
      </div>

    </div>

    <div class="container2">
      <div class="card">
        <img class="image" src="aayam.jpeg" alt="catalyser" style="width:100%">

        <p class="title">
          <?php
          $sql = "SELECT * FROM coaching where coaching_Name='Aayam Carrer Institute'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['coaching_Name']; ?>
        </p>
        <p class="contactnumber">Contact Number :
          <?php
          $sql = "SELECT contact_Number FROM coaching where coaching_Name='Aayam Carrer Institute'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['contact_Number']; ?>
        </p>
        <p class="email">Email :
          <?php
          $sql = "SELECT email FROM coaching where coaching_Name='Aayam Carrer Institute'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['email']; ?>
        </p>
        <p class="rating">Rating :
          <?php
          $sql = "SELECT rating FROM ratings where cid=5";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['rating']; ?>
        </p>
        <p class="courses">Courses :
          <?php
          $sql = "SELECT coursename FROM courses where coachingid=5";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $courseNames3[] = $row['coursename'];
          }
          foreach ($courseNames3 as $courseName) {
            echo $courseName . "<br>";
          } ?>
        </p>
        <p class="visit">Visit <span>&rarr;</span></p>
      </div>

      <div class="card">
        <img class="image" src="aakask.jpeg" alt="catalyser" style="width:100%">

        <p class="title">
          <?php
          $sql = "SELECT * FROM coaching where id=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['coaching_Name']; ?>
        </p>
        <p class="contactnumber">Contact Number :
          <?php
          $sql = "SELECT contact_Number FROM coaching where id=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['contact_Number']; ?>
        </p>
        <p class="email">Email :
          <?php
          $sql = "SELECT email FROM coaching where id=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['email']; ?>
        </p>
        <p class="rating">Rating :
          <?php
          $sql = "SELECT rating FROM ratings where cid=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['rating']; ?>
        </p>
        <p class="courses">Courses :
          <?php
          $sql = "SELECT coursename FROM courses where coachingid=1";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $courseNames4[] = $row['coursename'];
          }
          foreach ($courseNames4 as $courseName) {
            echo $courseName . "<br>";
          } ?>
        </p>
        <p class="visit">Visit <span>&rarr;</span></p>
      </div>


      <div class="card">
        <img class="image" src="successpoint.jpeg" alt="catalyser" style="width:100%">

        <p class="title">
          <?php
          $sql = "SELECT * FROM coaching where id=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['coaching_Name']; ?>
        </p>
        <p class="contactnumber">Contact Number :
          <?php
          $sql = "SELECT contact_Number FROM coaching where id=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['contact_Number']; ?>
        </p>
        <p class="email">Email :
          <?php
          $sql = "SELECT email FROM coaching where id=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['email']; ?>
        </p>
        <p class="rating">Rating :
          <?php
          $sql = "SELECT rating FROM ratings where cid=1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['rating']; ?>
        </p>
        <p class="courses">Courses :
          <?php
          $sql = "SELECT coursename FROM courses where coachingid=1";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $courseNames5[] = $row['coursename'];
          }
          foreach ($courseNames5 as $courseName) {
            echo $courseName . "<br>";
          } ?>
        </p>
        <p class="visit">Visit <span>&rarr;</span></p>
      </div>

    </div>


</body>

</html>