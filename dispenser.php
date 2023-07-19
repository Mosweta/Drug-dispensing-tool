<!DOCTYPE html>
<html>

<head>
    <title>Prescription has been received:</title>
</head>

<body>
    <h1>Prescription has been received:</h1>
    <?php
    // Get the prescription details from the form
    $drugId = $_POST["drug_id"] ?? null;
    $prescription = $_POST["prescription"] ?? null;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "suncityhospital";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($drugId !== null && $prescription !== null) {
        // Fetch the drug details from the database
        $sql = "SELECT * FROM drugs WHERE drug_id = $drugId";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $drug = $result->fetch_assoc();
            $TradeName = $drug["TradeName"];
            $CompName = $drug["CompName"];
            $quantity = $drug["quantity"];
            $price = $drug["price"];

            if ($quantity > 0) {
                // Update the quantity and emit the drug
                $newQuantity = $quantity - 1;
                $updateSql = "UPDATE drugs SET quantity = $newQuantity WHERE drug_id = $drugId";

                if ($conn->query($updateSql) === TRUE) {
                    echo "<h2>Dispense the Drug: " . $TradeName . "</h2>";
                    echo "Company Name: " . $CompName . "<br>";
                    echo "<p>" . $prescription . "</p>";
                    echo "Price: $" . $price . "<br>";
                    echo "Drug dispensed successfully. Remaining quantity: " . $newQuantity;
                } else {
                    echo "Error updating drug quantity: " . $conn->error;
                }
            } else {
                echo "Drug not available. Quantity is 0.";
            }
        } else {
            echo "Drug not found.";
        }
    } else {
        echo "Invalid prescription details.";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>

</html>