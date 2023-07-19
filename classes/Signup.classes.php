<?php

class Signup extends Dbh
{

    protected function setUser($uid, $pwd, $email, $usertype)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users ( users_uid, users_pwd, users_email, User_Type) VALUES (?,?,?,?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedPwd, $email, $usertype))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function CheckUser($uid, $email)
    {
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? or users_email = ?;');

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() > 0) {

            $resultCheck = false;
        } else {

            $resultCheck = true;
        }
        return $resultCheck;
    }
}
