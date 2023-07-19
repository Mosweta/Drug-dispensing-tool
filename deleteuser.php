<?php
require 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>User Delete Page</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Details
                            <a href="admin-view.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['users_id'])) {
                            $userid = mysqli_real_escape_string($con, $_GET['users_id']);
                            $query = "SELECT * FROM users WHERE users_id='$userid' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $user = mysqli_fetch_array($query_run);
                        ?>
                                <div class="mb-3">
                                    <label>Username</label>
                                    <p class="form-control">
                                        <?= $user['users_uid']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?= $user['users_email']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Usertype</label>
                                    <p class="form-control">
                                        <?= $user['User_Type']; ?>
                                    </p>
                                </div>


                        <?php
                            } else {
                                echo "<h4>No Such userid is Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>