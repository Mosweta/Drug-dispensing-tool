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
                                        <th>Drug ID</th>
                                        <th>TradeName</th>
                                        <th>PharmaceuticalCoName</th>
                                        <th>price</th>
                                        <th>quantity</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM drug";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $drug) {
                                    ?>
                                            <tr>
                                                <td><?= $drug['Drug_id']; ?></td>
                                                <td><?= $drug['TradeName']; ?></td>
                                                <td><?= $drug['CompName']; ?></td>
                                                <td><?= $drug['price']; ?></td>
                                                <td><?= $drug['quantity']; ?></td>

                                                <td>

                                                    <a href="edit.php?id=<?= $drug['Drug_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_drug" value="<?= $drug['Drug_id']; ?>" class="btn btn-danger btn-sm">Delete</button>
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
                                        <th>Drug ID</th>
                                        <th>TradeName</th>
                                        <th>PharmaceuticalCoName</th>
                                        <th>price</th>
                                        <th>quantity</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM drug";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $drug) {
                                    ?>
                                            <tr>
                                                <td><?= $drug['Drug_id']; ?></td>
                                                <td><?= $drug['TradeName']; ?></td>
                                                <td><?= $drug['CompName']; ?></td>
                                                <td><?= $drug['price']; ?></td>
                                                <td><?= $drug['quantity']; ?></td>

                                                <td>

                                                    <a href="edit.php?id=<?= $drug['Drug_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_drug" value="<?= $drug['Drug_id']; ?>" class="btn btn-danger btn-sm">Delete</button>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>