<?php

class Login extends Dbh
{

    protected function getUser($uid, $pwd)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? or users_email = ?;');



        if (!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=users not found");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);
        if ($checkPwd == false) {
            $stmt = null;
            header("location: ../index.php?error=Wrong Password");
            exit();
        } elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? or users_email = ? AND users_pwd= ?;');
            if (!$stmt->execute(array($uid, $uid, $pwd))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=users not found");
                exit();
            }
            $getUserType = $this->connect()->prepare('SELECT User_Type FROM users WHERE users_uid = ? or users_email = ?;');
            if ($getUserType == 'Admin') {
                header("location: ../services.php?error=Wrong Password");
                exit();
            } elseif ($getUserType == 'Doctor') {
                header("location: ../about.php?error=Wrong Password");
                exit();
            } elseif ($getUserType == 'Patient') {
                header("location: ../prescription.php?error=Wrong Password");
                exit();
            } else {
                header("location: ../index.php?error=Wrong Password");
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["usertype"] = $user[0]["User_Type"];
            $_SESSION["useruid"] = $user[0]["users_uid"];
            $stmt = null;
        }
    }
}
