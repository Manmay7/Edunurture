<?php
session_start();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
    header("location: index.html");
}
require_once "config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $centername = $_POST['centername'];
    $coachingid = $_SESSION['id'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $sql = "INSERT INTO center (centername, coachingid, address, city, state) VALUES
 ('$centername', '$coachingid','$address','$city','$state');";
    // echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "Center Added Succesfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// Close the database connection
mysqli_close($conn);

// $con->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link rel="stylesheet" href="style.css">
</head>
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
    .url, hr {
    text-align: center;
}

.url hr {
    margin-left: 20%;
    width: 60%;
}

.url a {
    color: #818181;
    display: block;
    font-size: 20px;
    margin: 10px 0;
    padding: 6px 8px;
    text-decoration: none;
}

.url a:hover, .url .active {
    background-color: #e8f5ff;
    border-radius: 28px;
    color: #000;
    margin-left: 14%;
    width: 65%;
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

<body>

    <div class="container">
        <h2>Add New Center</h2>
        <form action="" method="post">
            <input type="text" id="centername" name="centername" required placeholder="Enter Center Name">
            <input type="text" id="address" name="address" required placeholder="Enter Address">
            <input type="text" id="city" name="city" required placeholder="Enter City">
            <input type="text" id="state" name="state" required placeholder="Enter State">




            <button type="submit">Add</button>
            <div class="url">
            <a href="csetting.php" class="active">Back</a>
            <!-- <hr align="right" style="margin-top:"> -->
          </div>
        </form>
    </div>
</body>

</html>