<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Bar Example</title>
  <link rel="stylesheet" href="search.css">
</head>

<body>
  <form method="post" action="" class="search-box">
    <input type="text" placeholder="Find a Coaching...">
    <button type="submit" value="Search">Search</button>
  </form>
}
<?php
// Handle search query
require_once "config.php";
if (isset($_POST['search_query'])) {
    $search_query = $_POST['search_query'];

    // SQL query to search the "coaching" table
    $sql = "SELECT * FROM coaching WHERE coaching_Name LIKE '$search_query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        while ($row = $result->fetch_assoc()) {
            // Display the search results
            echo "Name: " . $row['coaching_Name'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "Contact Number: " . $row['contact_Number'] . "<br>";
            // Add more columns as needed
        }
    } else {
        echo "<p>No results found.</p>";
    }
}

// Close the database connection
$conn->close();
?>
</body>

</html>