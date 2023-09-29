<?php

session_start();

// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
//   header("location: login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .profile-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      background-color: #fff;
    }

    .profile-image {
      text-align: center;
    }

    .profile-image img {
      max-width: 100%;
      height: auto;
    }

    .profile-name {
      font-size: 24px;
      text-align: center;
      margin: 20px 0;
    }

    .profile-details {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .profile-details p {
      margin: 5px 0;
    }
  </style>
</head>

<body>
  <div class="profile-container">
    <div class="profile-image">
      <img src="student-image.jpg" alt="Student Image">
    </div>
    <div class="profile-name">
      John Doe
    </div>
    <div class="profile-details">
      <p><strong>Username</strong> <?php echo $_SESSION['username']?></p>
      <!-- <p><strong>Address:</strong> </p> -->
      <p><strong>Email:</strong> <?php echo $_SESSION['email']?></p>
    </div>
  </div>
</body>

</html>