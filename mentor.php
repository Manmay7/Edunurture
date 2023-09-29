<?php
session_start();

if ( !isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
  header("location: index.html");
}
require_once "config.php";
$username = $education = $contact_number = "";
$username_err = $education_err = $contact_number_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";
    } else {
        $sql = "SELECT id FROM mentor WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken";
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);

    if (empty(trim($_POST["contact_number"]))) {
        $contact_number_err = "contact_number cannot be blank";
    } else {
        $sql = "SELECT id FROM mentor WHERE contact_number = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_contact_number);

            // Set the value of param username
            $param_contact_number = trim($_POST['contact_number']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $contact_number_err = "This username is already taken";
                } else {
                    $contact_number = trim($_POST['contact_number']);
                }
            } else {
                echo "Something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
    }

    if (empty(($_POST["education"]))) {
        $username_err = "education cannot be blank";
    } else {
        $sql = "SELECT id FROM mentor WHERE education = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_education);

            // Set the value of param username
            $param_education = ($_POST['education']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $education_err = "This username is already taken";
                } else {
                    $education = ($_POST['education']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);
    // Check for password
    // If there were no errors, go ahead and insert into the database
    if (empty($username_err) && empty($contact_number_err)) {
        $sql = "INSERT INTO mentor (username,contact_number,education) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_education, $param_contact_number);

            // Set these parameters
            $param_username = $username;
            $param_education = $education;
            $param_contact_number = $contact_number;
            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: mentor.php");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    elseif(!empty($username_err)){
        echo $username_err;
        
    }
    elseif(!empty($education_err)){
        echo $education_err;
    }
    elseif(!empty($contact_number_err)){
        echo $contact_number_err;
    }
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Mentor Information</h2>
        <form action="" method="post">
            <label for="username">Mentor name:</label>
            <input type="text" id="username" name="username" required>

            <label for="contactNumber">Contact Number:</label>
            <input type="tel" id="contactNumber" name="contact_number" pattern="[0-9]{10}" required>

            <label for="education">Education Details:</label>
            <input type="text" id="education" name="education" required>

            
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
