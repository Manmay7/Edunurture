<?php
session_start();

if ( !isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
  header("location: index.html");
}
require_once "config.php";
// $username = $education = $contact_number = "";
// $username_err = $education_err = $contact_number_err = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
$username=$_POST['username'];
$contact_Number=$_POST['contact_number'];
$education=$_POST['education'];
$cid=$_SESSION['id'];
$sql="INSERT INTO mentor (username,contact_Number,education,cid) VALUES 
('$username','$contact_Number','$education','$cid');";
if (mysqli_query($conn, $sql)) {
    echo "Mentor Added Succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// Close the database connection
mysqli_close($conn);
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
