<!DOCTYPE html>
<html>
<head>
    <title>Search Coaching Data</title>
    <style>
        body {
            text-align: center;
        }

        .centered {
            margin: 0 auto;
            width: 50%; /* Adjust this value to control the width of the table */
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Search Coaching Data</h1>
    <form method="post" action="">
        <input type="text" name="search_query" placeholder="Enter search term">
        <input type="submit" value="Search">
    </form>

    <?php
    require_once "config.php";

    if (isset($_POST['search_query'])) {
        
        $search_query = $_POST['search_query']; 
        

        
        $sql = "SELECT * FROM coaching WHERE coaching_Name LIKE '%$search_query'";
        
        $result = $conn->query($sql);

        if ($result === false) {
            echo "Error: " . $conn->error;
        } elseif ($result->num_rows > 0) {
            echo "<h2>Search Results:</h2>";
            echo "<div class='centered'>";
            echo "<table>";
            echo "<tr><th>Name</th><th>Email</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['coaching_Name'] . "</td><td>" . $row['email'] . "</td></tr>";
            }
            echo "</table>";
            echo "</div>";
        } else {
            echo "<p>No results found.</p>";
        }
    }

        
        $conn->close();
    
    ?>
</body>
</html>
