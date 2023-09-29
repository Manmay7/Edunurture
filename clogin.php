<?php
//This script will handle login
session_start();
// check if the user is already logged in
if (isset($_SESSION['coaching_Name'])) {
    header("location: cwelcome.php");
    exit;
}
require_once "config.php";
$coaching_Name = $password = $email = $contact_Number = "";
$err = "";
// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['coaching_Name'])) || empty(trim($_POST['password']))) {
        $err = "Please enter coaching_Name + password";
    } else {
        $coaching_Name = trim($_POST['coaching_Name']);
        $password = trim($_POST['password']);

    }
    if (empty($err)) {
        $sql = "SELECT id, coaching_Name,password FROM coaching WHERE coaching_Name = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_coaching_Name);
        $param_coaching_Name = $coaching_Name;



        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $coaching_Name, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // this means the password is corrct. Allow user to login
                        session_start();
                        $_SESSION["coaching_Name"] = $coaching_Name;
                        // $_SESSION["email"] = $email;
                        // $_SESSION["contact_Number"] = $contact_Number;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;
                        $userId = $_SESSION["id"];
                        $sql = "SELECT email FROM coaching WHERE id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $userId);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $email = $row["email"];
                        } else {
                            // Handle the case where the user is not found in the database.
                        }
                        $_SESSION['email'] = $email;
                        $_SESSION['contact_Number'] = $contact_Number;
                        $userId = $_SESSION["id"];
                        $sql = "SELECT contact_Number FROM coaching WHERE id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $userId);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $contact_Number = $row["contact_Number"];
                        } else {
                            // Handle the case where the user is not found in the database.
                        }
                        $_SESSION['contact_Number'] = $contact_Number;
                        //Redirect user to welcome page
                        header("location: cwelcome.php");

                    }
                }

            }

        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <h1>Login</h1>
            <form action="" method="post">
                <label for="coaching_Name">Coaching Name</label>
                <input type="text" id="coaching_Name" name="coaching_Name" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
            <p class="signup-link">Don't have an account? <a href="cregistration.html">Sign up</a></p>
        </div>
    </div>
</body>

</html>