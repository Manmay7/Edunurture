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
  <link rel="stylesheet" href="coach.css ">
</head>

<body>

  <!-- top-banner -->
  <div class="top-banner">
    <div class="container">
      <div class="small-bold-text banner-text">📣 Best Coachings for JEE/NEET-></div>
    </div>
  </div>

  <!-- nav-bar -->
  <nav>
    <div class="container man-nav flex">
      <a href="#" class="company-logo">
        <!-- <img src="./assets/asset 1.png" alt="company-logo"> -->
        <h1>EduNurture</h1>
      </a>
      <div class="nav-links">
        <ul class="flex">
          <li><a href="cwelcome.php" class="hover-link">Home</a></li>
          <li><a href="aboutc.php" class="hover-link">About us</a></li>
          <li><a href="coursesc.php" class="hover-link">Courses</a></li>
          <li><a href="coachic.php" class="hover-link">Coaching</a></li>
          <li><a href="cprofile.php" class="hover-link secondary-button">
              <?php echo $_SESSION["coaching_Name"] ?>
            </a></li>
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
  <div class="contain">
    <div class="container">
      <div class="card">
        <img src="Allen.jpg" alt="Allen" style="width:100%">
        <h1>Allen Career Institute</h1>
        <p class="title"> Allen Career Institute is one of the most trusted institutes in Indore.This institute provides
          courses like
          NEET, IIT JEE, AIPMT, AIEEE, Olympiad, NTSE, and KVPY.</p>
        <!-- <p>Harvard University</p>  -->
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <p><button>Visit <span>&rarr;</span></button></p>
      </div>

      <div class="card">
        <img src="Catalyser.jpeg" alt="Catalyser" style="width:100%">
        <h1>Catalyser</h1>
        <p class="title">
          Recognized as one of the best IIT JEE coaching centers in Indore, CatalyseR has consistently produced
          top-performing students who have excelled in competitive exams. Over the past 13 years, they have produced
          10 JEE City Toppers, 5 IIT Zone Toppers, the highest number of AIR under 1000 (Freshers) in 2022, and more
          than 1400 NTSE Scholars, 1800 plus IIT Selections which is an impressive feat unmatched by any other
        </p>
        <!-- <p>Harvard University</p>  -->
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <p><button>Visit <span>&rarr;</span></button></p>
      </div>

      <div class="card">
        <img src="Aayam1.jpg" alt="Aayam" style="width:100%">
        <h1>Aayam</h1>
        <p class="title"> AAYAM is a premier coaching institute in Indore, India, renowned for its exceptional guidance
          and coaching
          for JEE (Main+Advanced), JEE (Main), NEET-UG, and Pre-Nurture & Career Foundation exams. Our institute is
          highly regarded for its consistent delivery of outstanding results year after year.
        </p>
        <!-- <p>Harvard University</p>  -->
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <p><button>Visit <span>&rarr;</span></button></p>
      </div>
    </div>

    <div class="container1">
      <div class="card">
        <img src="kalpvriksha.png" alt="kalpvriksha" style="width:100%">
        <h1>Kalpvriksha</h1>
        <p class="title"> Kalpavriksh got the capability of adding the enhancement to every one’s thought process and
          developing their
          self growth. Kalpavriksha proudly term itself as the modern Gurukul for IIT-JEE And NEET coaching classes
          and training classes in Indore
        </p>

        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a> -->
        < <a href="#"><i class="fa fa-facebook"></i></a>
          <p><button>Visit <span>&rarr;</span></button></p>
      </div>

      <div class="card">
        <img src="Vigyas.jpeg" alt="Vigyas" style="width:100%">
        <h1>Vigyas</h1>
        <p class="title"> Qualifying the most prestigious exams IIT JEE (Mains & Advanced) and NEET is the ultimate
          dream
          of every
          student who wants to make career in engineering and medical field.Get complete guidance on IIT JEE (Mains &
          Advanced), NEET, NTSE and various Olympiads preparation with our highly qualified and dedicated faculty to
          make your journey to crack IIT JEE, NEET or any other exam easier.
        </p>
        <!-- < <p>Harvard University</p>   -->
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <p><button>Visit <span>&rarr;</span></button></p>
      </div>

      <div class="card">
        <img src="fiitjee.jpg" alt="FIIT-JEE" style="width:100%">
        <h1>FIIT-JEE</h1>
        <p class="title">You will inherit the pedigree of 26 years of unmatched, consistent dominance in results in all
          engineering
          entrance exams including IIT-JEE / JEE Advanced, AIEEE / JEE Main, BITSAT, WBJEE, TANCET, EAMCET, KCET,
          MHTCET….
        </p>
        <!-- <p>Harvard University</p>  -->
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <p><button>Visit <span>&rarr;</span></button></p>
      </div>
    </div>
  </div>


</body>

</html>