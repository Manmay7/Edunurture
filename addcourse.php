<?php
session_start();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
    header("location: index.html");
}
// $con=mysqli_connect($server,$username,$password,$database);
require_once "config.php";
// $database="trip";
// if(!$con){
//     die("the connection to database failed due to ".mysqli_connect_error());
// }
// echo "Success connecting to the db";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $coursename = $_POST['coursename'];
    $coachingid = $_SESSION['id'];
    $field = $_POST['field'];
    $duration = $_POST['duration'];
    $fees = $_POST['fees'];
    $other = $_POST['other'];

    $sql = "INSERT INTO courses ( coursename, coachingid, field, duration, fees, other) VALUES
 ('$coursename','$coachingid','$field', '$duration','$fees', '$other');";
    // echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "Mentor Added Succesfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);

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
        <h2>Add Course</h2>
        <form action="" method="post">
            <!-- <label for="coursename">Course Name:</label> -->
            <input type="text" id="coursename" name="coursename" required placeholder="Enter Course Name">


            <!-- <input type="text" id="coachingid" name="coachingid" required placeholder="Enter Coaching id"> -->
            <!-- <label for="field">Field:</label> -->
            <input type="text" id="field" name="field" required placeholder="Enter Field i.e. JEE/NEET">

            <!-- <label for="duration">Time Duration:</label> -->
            <input type="number" id="duration" name="duration" required
                placeholder="Enter duration of the course (in Weeks)">



            <input type="number" id="fees" name="fees" required placeholder="Enter fees(in rupees)">
            <!-- <label for="other">Description:</label> -->
            <textarea id="other" name="other" required placeholder="Enter other information"></textarea>


            <button type="submit">Add</button>

        </form>
    </div>
</body>

</html>