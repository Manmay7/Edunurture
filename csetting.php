<?php

session_start();

if ( !isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
  header("location: index.html");
}

// Database connection parameters
  // Replace with your database server name
  $_SESSION["id"] = $id;
$coaching_Nmae = "coaching_Name";
$email="email"; // Replace with your database coaching_Nmae$coaching_Nmae
$password = "password"; // Replace with your database password
   // Replace with your database name

// Create a database connection
$conn = new mysqli($coaching_Nmae, $password);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assume you have a user ID available (e.g., from a session or request parameter)
$userID = 1; // Replace with the actual user ID

// SQL query to retrieve user's profile data (assuming you have a 'users' table)
$sql = "SELECT * FROM users WHERE id = $userID";

// Execute the SQL query
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch user data
    $row = $result->fetch_assoc();
    
    // Display user profile information
    echo "<h2>User Profile</h2>";
    echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
    echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
    // Add more fields as needed

    // Close the database connection
    $conn->close();
} else {
    echo "User not found";
}

?>
