<!DOCTYPE html>
<html>
<head>
    <title>Search Coaching Data</title>
</head>
<body>
    <h1>Search Coaching Data</h1>
    <form method="post" action="search.php">
        <input type="text" name="search_query" placeholder="Enter search term">
        <input type="submit" value="Search">
    </form>

    <?php
    // Database connection parameters
    require_once "config.php";

    // Create a database connection
    // $conn = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle search query
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
