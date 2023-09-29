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
  <title>About Us</title>
  <link rel="stylesheet" href="style.css ">
</head>

<body>
  <nav id="top_container" class="top_bar">

    <div class=" man-nav flex" style="margin-left: 50px; margin-right:73px;">
      <a href="#" class="company-logo">
        <!-- <img src="./assets/asset 1.png" alt="company-logo"> -->

        <h1>EduNurture</h1>
      </a>
      <div class="nav-links">
        <ul class="flex">
          <li><a href="cwelcome.php" class="hover-link">Home</a></li>
          <li class="aboutc"><a href="aboutc.php" class="hover-link">About us</a></li>
          <li><a href="coursesc.php" class="hover-link">Courses</a></li>
          <li><a href="coachi.html" class="hover-link">Coaching</a></li>
          <li><a href="cprofile.php" class="hover-link secondary-button">
              <?php echo $_SESSION["coaching_Name"] ?>
            </a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- header -->
  <header>
    <div class="container header-section ">
      <!-- <div class="header-left">
                <h1>Design Confidently</h1>
                <p>UsabilityHub is a remote user research platform that takes the guesswork out of design decisions by validating them with real users.</p>
                <ul>
                    <li><a href="" class="hover-link primary-button get-started-btn">Get Started</a></li>
                </ul>
                <h6>No credit card required</h6>
            </div>
            <div class="header-right">
                <img src="" alt="image">
            </div> -->
      <p>
      <h2>About Us</h2>

      <!-- <h3>Welcome to EduNurture!</h3>

            <div>At EduNurture, we are dedicated to nurturing your educational aspirations and guiding you towards success in the competitive world of JEE and NEET examinations. Our platform is designed to be your one-stop destination for discovering and connecting with a multitude of coaching institutes that specialize in JEE (Joint Entrance Examination) and NEET (National Eligibility cum Entrance Test) preparation.</div>
 -->
      <h3>Our Mission</h3>

      Our mission is simple yet profound: to empower aspiring students with the resources and guidance they need to
      excel in their JEE and NEET exams. We understand that these examinations are critical milestones that shape the
      future of young minds, and we are committed to providing comprehensive support in the form of top-notch coaching
      institutes, relevant study materials, and expert guidance.

      <h3>Why EduNurture?</h3>
      <ul>
        <li>
          <h5>Extensive Network:</h5> EduNurture serves as a bridge between students and a wide range of coaching
          institutes across the country. We have carefully curated a network of reputable institutes that excel in
          providing quality education for JEE and NEET exams.
        </li>
        <li>
          <h5>Expert Guidance:</h5> Our platform offers access to experienced educators, subject matter experts, and
          mentors who can provide valuable insights and guidance throughout your preparation journey.
        </li>
        <li>
          <h5>Comprehensive Resources:</h5> We believe that success comes from a combination of quality teaching and
          well-structured study materials. EduNurture provides a collection of resources, including practice papers,
          mock tests, and study guides, to ensure you're well-prepared for the exams.
        </li>
        <li>
          <h5>Personalized Recommendations:</h5> Every student is unique, and their learning needs vary. Our platform
          uses advanced algorithms to analyze your strengths and areas of improvement, offering personalized coaching
          institute recommendations that align with your goals.
        </li>
        <li>
          <h5>Simplified Search:</h5> Navigating the vast landscape of coaching institutes can be overwhelming.
          EduNurture simplifies this process by categorizing institutes based on location, expertise, and teaching
          methods, making it easy for you to find the perfect fit.
        </li>
      </ul>

      <h3>Our Commitment</h3>

      EduNurture is more than just a platform – it's a commitment to your dreams. We understand the challenges you face
      in preparing for JEE and NEET exams, and we stand by you every step of the way. Our goal is to inspire, guide, and
      support you as you work tirelessly towards achieving your academic aspirations.

      Join us at EduNurture and embark on a transformative learning journey that will shape not only your exam results
      but also your future success. Your dreams are our priority, and we're here to nurture them into reality.

      For any inquiries or assistance, please don't hesitate to contact our dedicated support team. We're here to help
      you thrive.

      <h4>Get in touch with us today and let's begin this journey together!</h4>
      </p>
    </div>
  </header>

  <footer></footer>

  <div class="sub-footer"></div>
  <script src="https://kit.fontawesome.com/6458146f7e.js" crossorigin="anonymous"></script>
</body>

</html>