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

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Student Profile</h1>
        </div>

        <!-- Navbar -->
        <ul>
            <li>
                <a href="slogout.php">
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
                <?php echo $_SESSION["username"] ?>
            </div>
            <div class="job">

            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="#settings">Settings</a>
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
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                                <?php echo $_SESSION["username"] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <?php echo $_SESSION["email"] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>saver,Indore</td>
                        </tr>
                        <tr>
                            <td>Courses</td>
                            <td>:</td>
                            <td>JEE</td>
                        </tr>
                        <tr>
                            <td>Coaching</td>
                            <td>:</td>
                            <td>Catalyzer</td>
                        </tr>
                    </tbody>
                </table>
                <div class="sidenav-url">
                    <div class="url">
                        <a href="#profile" class="active">Dashboard</a>
                        <!-- <hr align="right" style="margin-top:"> -->
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- End -->
</body>

</html>