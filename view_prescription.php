<?php
require 'Connecting.php';

// Retrieve prescription details from the database
$sql = "SELECT * FROM drug";
$result = $conn->query($sql);

// Check if any prescription records exist
if ($result && $result->num_rows > 0) {
    $prescriptions = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $prescriptions = [];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Prescription</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        .container {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
        }

        table {
            width: 100%;
            font-size: medium;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: medium;
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>View Prescription</h1>

        <?php if (!empty($prescriptions)) : ?>
            <table>
                <tr>
                    <th>Drug ID</th>
                    <th>Trade Name</th>
                    <th>Company Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                <?php foreach ($prescriptions as $prescription) : ?>
                    <tr>
                        <td><?= $prescription['Drug_id']; ?></td>
                        <td><?= $prescription['TradeName']; ?></td>
                        <td><?= $prescription['CompName']; ?></td>
                        <td><?= $prescription['quantity']; ?></td>
                        <td><?= $prescription['price']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else : ?>
            <p>No prescription records found.</p>
        <?php endif; ?>
    </div>
</body>

</html>