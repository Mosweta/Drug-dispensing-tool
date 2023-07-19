<!DOCTYPE html>
<html lang="en">

<<?php
    session_start();
    require 'connection.php';
    ?> <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Welcome Page(Drug)</title>
    </head>

    <body>

        <div class="container mt-4">

            <?php include('message.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Drug Details
                                <a href="create.php" class="btn btn-primary float-end">Add Drug</a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Prescription ID</th>
                                        <th>TradeName</th>
                                        <th>Patient_ssn</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Dosage</th>
                                        <th>Comment</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM prescription";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
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
                                    } else {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                    ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <title>Drug Dispense</title>
        </head>

        <body>

            <div class="container mt-5">


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4> Add Drug
                                    <form action="logic.php" method="POST">
                                        <label for="patient_search">Search Patient:</label>
                                        <input type="text" name="patient_ssn" id="patient_ssn" placeholder="Enter patient ssn" required>
                                        <input type="submit" value="Search">
                                    </form>
                                </h4>
                            </div>
                            <div class="card-body">
                                <?php

                                include('message.php');
                                if (isset($_POST['submit'])) {
                                    $whatToSearch = mysqli_real_escape_string($conn, $_POST['search']);
                                    $sql = "SELECT * FROM prescription WHERE patient_SSN = '$whatToSearch' ORDER BY presc_id DESC";
                                    $result = $conn->query($sql);
                                    $conn->close();
                                } else {
                                    // SQL query to select data from the database
                                    $sql = "SELECT * FROM prescription ORDER BY presc_id DESC ";
                                    $result = $conn->query($sql);
                                    $conn->close();
                                }
                                ?>

                                <form action="code.php" method="POST">


                                    <div class="mb-3">
                                        <label>TradeName</label>
                                        <input type="text" name="tradename" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Pharmaceutical Company Name</label>
                                        <input type="text" name="compName" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <input type="text" name="quantity" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="save_drug" class="btn btn-primary">Submit</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        </body>

    </html>