<!-- PHP code to establish connection with the local server -->
<?php
require 'Connecting.php';

if (isset($_POST['submit'])) {
    $whatToSearch = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM prescription WHERE patient_SSN = '$whatToSearch' ORDER BY presc_id DESC";
    $result = $conn->query($sql);
    $conn->close();
} else {
    // SQL query to select data from the database
    $sql = "SELECT * FROM precription ORDER BY presc_id DESC ";
    $result = $conn->query($sql);
    $conn->close();
}
?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        .container {
            margin: 600px auto;
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
            font-family: 'Gill Sans', 'Gill Sans MT',
                ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
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
    <section>
        <h1>Patient Details</h1>
        <!-- TABLE CONSTRUCTION -->

        <form action="" method="POST">

            <div class="form-group">
                <input type="search" name="search" required>
                <span></span>
                <label>Search</label>
            </div>

            <input type="submit" name="submit" value="Search">

        </form>

        <button>
            <a href="?reset=1">Reset</a></button>

        <table>
            <tr>
                <th>prescription id</th>
                <th>Trade Name</th>
                <th>patient ssn</th>
                <th>quantity</th>
                <th>Date</th>
                <th>Dosage</th>
                <th>Comment</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
            // LOOP TILL END OF DATA
            while ($rows = $result->fetch_assoc()) {
                $query = "SELECT * FROM prescription";
                $query_run = mysqli_query($con, $query);
                foreach ($query_run as $drug) {
            ?>
                    <tr>
                        <td><?= $drug['presc_id']; ?></td>
                        <td><?= $drug['TradeName']; ?></td>
                        <td><?= $drug['patient_SSN']; ?></td>
                        <td><?= $drug['Quantity']; ?></td>
                        <td><?= $drug['Presc_Date']; ?></td>
                        <td><?= $drug['Dosage']; ?></td>
                        <td><?= $drug['comment']; ?></td>
                        <td>


                            </form>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </section>
</body>

</html>