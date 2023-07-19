<?php
session_start();
require 'connection.php';

if (isset($_POST['delete_user'])) {
    $userid = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM users WHERE users_id='$userid' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: admin-view.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Drug Not Deleted";
        header("Location: admin-view.php");
        exit(0);
    }
}

if (isset($_POST['update_user'])) {
    $userid = mysqli_real_escape_string($con, $_POST['userid']);

    $useruid = mysqli_real_escape_string($con, $_POST['uid']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $usertype = mysqli_real_escape_string($con, $_POST['usertype']);


    $query = "UPDATE users SET users_uid='$useruid', users_email='$email', User_Type='$usertype' WHERE users_id='$userid' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: admin-view.php");
        exit(0);
    } else {
        $_SESSION['message'] = "User Not Updated";
        header("Location: admin-view.php");
        exit(0);
    }
}
if (isset($_POST['submit'])) {
    $id = $_POST["patient_ssn"];
    $drugid = mysqli_real_escape_string($con, $_GET['patient_ssn']);
    $sql = "SELECT * FROM drugs WHERE Drug_id = $drugId";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $drug = $result->fetch_assoc();
        $drugName = $drug["drug_name"];
        $quantity = $drug["quantity"];
        $price = $drug["price"];
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
}
?>

</tbody>
</table>