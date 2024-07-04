<?php
session_start();

if ( !isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
  header("location: index.html");
}
require_once "config.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $cid =$_SESSION['id'];
    $studentname = $_POST["studentname"];
    $rank = $_POST["rank"];
    $batch = $_POST["batch"];

    $sql = "INSERT INTO results (cid, studentname, rank,batch) VALUES ('$cid', '$studentname', '$rank','$batch')";

    if (mysqli_query($conn, $sql)) {
        echo "Previous Result Added Succesfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    $conn->close();

?>



<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
    <link rel="stylesheet" type="text/css" > 
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    h1 {
        color: #333;
        background-color: #94B0D6;
        padding: 20px;
        border-radius: 10px;
    }

    form {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        width: 300px;
        margin: 0 auto;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #ffcc00;
        color: #333;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #ff9900;
        transition: background-color 0.3s ease;
    }

    .success {
        color: #009900;
        font-weight: bold;
    }

    .error {
        color: #ff0000;
        font-weight: bold;
    }
</style>

</head>
<body>
    <h1>Previous Results</h1>
    <form action="addresult.php" method="post">
        <label for="studentname">Student Name:</label>
        <input type="text" name="studentname" id="studentname" required><br><br>

        <label for="rank">Rank:</label>
        <input type="text" name="rank" id="rank" required><br><br>

        <label for="batch">College:</label>
        <input type="text" name="batch" id="batch" required><br><br>

        <input type="submit" value="Submit">
        <div class="url">
            <a href="csetting.php" class="active">Back</a>
            <!-- <hr align="right" style="margin-top:"> -->
          </div>
    </form>
</body>
</html>
