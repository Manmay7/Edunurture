<?php
require_once "config.php";

$coaching_Name = $password = $confirm_password = $email = $contact_Number=$registrationnumber="";
$username_err = $password_err = $confirm_password_err = $email_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if username is empty
    if (empty(trim($_POST["coaching_Name"]))) {
        $username_err = "Username cannot be blank";
    } else {
        $sql = "SELECT id FROM coaching WHERE coaching_Name = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['coaching_Name']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken";
                } else {
                    $coaching_Name = trim($_POST['coaching_Name']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);

    if (empty(trim($_POST["email"]))) {
        $email_err = "Email cannot be blank";
    } else {
        $sql = "SELECT id FROM coaching WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set the value of param username
            $param_email = trim($_POST['email']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This username is already taken";
                } else {
                    $email = trim($_POST['email']);
                }
            } else {
                echo "Something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
    }
     
        $sql = "SELECT id FROM coaching WHERE contact_Number = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_contact_Number);

            // Set the value of param username
            $param_contact_Number = trim($_POST['contact_Number']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                $contact_Number = trim($_POST['contact_Number']);
                
            } else {
                echo "Something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
        $sql = "SELECT id FROM coaching WHERE registrationnumber = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_registrationnumber);

            // Set the value of param username
            $param_registrationnumber = trim($_POST['registrationnumber']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                $registrationnumber = trim($_POST['registrationnumber']);
                
            } else {
                echo "Something went wrong";
            }
        }
        mysqli_stmt_close($stmt);

    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
    } else {
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
        $password_err = "Passwords should match";
    }


    // If there were no errors, go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)) {
        $sql = "INSERT INTO coaching (coaching_Name,registrationnumber,contact_Number ,password,email) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $param_username,$param_registrationnumber,$param_contact_Number, $param_password, $param_email);

            // Set these parameters
            $param_username = $coaching_Name;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_email = $email;
            $param_registrationnumber=$registrationnumber;
            $param_contact_Number=$contact_Number;
            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: clogin.php");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    elseif(!empty($username_err)){
        echo $username_err;
        
    }
    elseif(!empty($password_err)){
        echo $password_err;
    }
    elseif(!empty($confirm_password_err)){
        echo $confirm_password_err;
    }
    mysqli_close($conn);
}

?>