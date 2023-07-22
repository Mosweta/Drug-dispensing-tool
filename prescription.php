<!DOCTYPE html>
<html>
<head>
    <title>Prescription</title>
</head>
<body>
    <h1>Prescription</h1>

    <?php
    // Get the selected drug ID from the URL parameter
    $drugId = isset($_GET["drug_id"]) ? $_GET["drug_id"] : 0;

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

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("SELECT * FROM drugs WHERE drug_id = ?");
    $stmt->bind_param("i", $drugId);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $drug = $result->fetch_assoc();
        echo "<h2>Drug: " . $drug["drug_name"] . "</h2>";
        echo "<p>Write the prescription for this drug here.</p>";
        echo "<form action='send_prescription.php' method='post'>";
        echo "<input type='hidden' name='drug_id' value='" . $drug["drug_id"] . "'>";
        echo "<textarea name='prescription' rows='5' cols='40'></textarea><br>";
        echo "<input type='submit' value='Send Prescription'>";
        echo "</form>";
    } else {
        echo "Drug not found.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
    ?>

</body>
</html>
