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

<body>

    <div class="container">
        <h2>Add New Center</h2>
        <form action="" method="post">
            <input type="text" id="centername" name="centername" required placeholder="Enter Center Name">
            <input type="text" id="address" name="address" required placeholder="Enter Address">
            <input type="text" id="city" name="city" required placeholder="Enter City">
            <input type="text" id="state" name="state" required placeholder="Enter State">




            <button type="submit">Add</button>

        </form>
    </div>
</body>

</html>