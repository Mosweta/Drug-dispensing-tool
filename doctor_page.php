<!DOCTYPE html>
<html>
<head>
    <title>Drug Inventory</title>
</head>
<body>
    <h1>Drug Inventory</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "inventory";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";

    // Fetch drugs from the database
    $sql = "SELECT * FROM drugs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["drug_id"] . "</td>";
            echo "<td>" . $row["drug_name"] . "</td>";
            echo "<td><a href='prescription.php?drug_id=" . $row["drug_id"] . "'>Prescribe</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No drugs found in the inventory.";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
