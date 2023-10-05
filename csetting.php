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
  <title>Profile Page</title>

  <!-- Custom Css -->
  <link rel="stylesheet" href="profile.css">

  <!-- <link rel="stylesheet" href="profile1.css"> -->

  <!-- FontAwesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
  <!-- Navbar top -->
  <div class="navbar-top">
    <div class="title">
      <h1>Coaching Profile Settings</h1>
    </div>

    <!-- Navbar -->
    <ul>
      <li>
        <a href="clogout.php">
          <i class="fa fa-sign-out-alt fa-2x"></i>
        </a>
      </li>
    </ul>
    <!-- End -->
  </div>
  <!-- End -->

  <!-- Sidenav -->
  <div class="sidenav">
    <div class="profile">
      <img src="user_456212.png" alt="" width="100" height="100">

      <div class="name">
        <?php echo $_SESSION["coaching_Name"] ?>
      </div>
      <div class="job">

      </div>
    </div>

    <div class="sidenav-url">
      <div class="url">
        <a href="cprofile.php">Profile</a>
        <hr align="center">
      </div>
      <div class="url">
        <a href="csetting.php" class="active">Settings</a>
        <hr align="center">
      </div>
    </div>
  </div>
  <!-- End -->

  <!-- Main -->
  <div class="main">
    <h2>IDENTITY</h2>
    <div class="card">
      <div class="card-body">
        <!-- <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>Catalyzer</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>catalyzer@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Contact Number</td>
                            <td>:</td>
                            <td>9999999999</td>
                        </tr>
                        <tr>
                            <td>Courses available</td>
                            <td>:</td>
                            <td>JEE/NEET</td>
                        </tr>
                        <tr>
                            <td>Center</td>
                            <td>:</td>
                            <td>Indore, Bhopal, Mumbai, Delhi</td>
                        </tr>
                    </tbody>
                </table> -->
        <form action="#" method="post">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="contactNumber">Contact Number:</label>
            <input type="tel" id="contactNumber" name="contactNumber" required>
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="flex">
            <div class="form-group">
              <button type="submit">Save</button>
            </div>
          </div>
        </form>
        <div class="sidenav-url">
          <div class="url">
            <a href="cwelcome.php" class="active">Home</a>
            <!-- <hr align="right" style="margin-top:"> -->
          </div>
          <div class="url">
            <a href="addmentor.php" class="active">Add mentors</a>
            <!-- <hr align="right" style="margin-top:"> -->
          </div>
          <div class="url">
            <a href="addcourse.php" class="active">Add Courses</a>
            <!-- <hr align="right" style="margin-top:"> -->
          </div>
          <div class="url">
            <a href="addcenter.php" class="active">Add Center</a>
            <!-- <hr align="right" style="margin-top:"> -->
          </div>
          <div class="url">
            <a href="addresult.php" class="active">Add Result</a>
            <!-- <hr align="right" style="margin-top:"> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End -->
</body>
</html>