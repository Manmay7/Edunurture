<?php
session_start();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
    header("location: index.html");
}
require_once "config.php";
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
<style>
    th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
</style>
<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Coaching Profile</h1>
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
                <a href="#profile" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="csetting.php">Settings</a>
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
                <a href="csetting.php"><i class="fa fa-pen fa-xs edit"></i></a>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                                <?php echo $_SESSION["coaching_Name"] ?>
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
                            <td>Contact Number</td>
                            <td>:</td>
                            <td>
                                <?php echo $_SESSION["contact_Number"] ?>
                            </td>
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
                </table>
                <div class="sidenav-url">
                    <div class="url">
                        <a href="cwelcome.php" class="active">Home</a>
                        <!-- <hr align="right" style="margin-top:"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <h2>Mentor</h2>
        <div class="card">
            <div class="card-body">
                <a href="csetting.php"><i class="fa fa-pen fa-xs edit"></i></a>
                <?php
                $sql = "SELECT * FROM mentor where cid=$_SESSION[id]";
                $result = mysqli_query($conn, $sql);
                ?>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Education</th>
                    </tr>
                    <?php
                    // Display mentor data in a table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>",  $row['username'] . "</td>";
                        echo "<td>",  $row['contact_Number'] . "</td>";
                        echo "<td>",  $row['education'] . "</td>";
                        // Add more table data cells for other columns as needed
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>



    </div>
    <div class="main">
        <h2>Center</h2>
        <div class="card">
            <div class="card-body">
                <a href="csetting.php"><i class="fa fa-pen fa-xs edit"></i></a>
                <?php
                $sql = "SELECT * FROM centers where cid=$_SESSION[id]";
                $result = mysqli_query($conn, $sql);
                ?>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Education</th>
                    </tr>
                    <?php
                    // Display mentor data in a table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>",  $row['username'] . "</td>";
                        echo "<td>",  $row['contact_Number'] . "</td>";
                        echo "<td>",  $row['education'] . "</td>";
                        // Add more table data cells for other columns as needed
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>



    </div>
    <!-- End -->
</body>

</html>






<!-- // Query to retrieve data from the "mentor" table

<!DOCTYPE html>
<html>

<head>
    <title>Mentor List</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Mentor List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <!-- Add more table headers for other columns as needed -->
        
