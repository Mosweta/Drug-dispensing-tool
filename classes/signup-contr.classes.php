<?php
class Signupcontr extends Signup
{



    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;
    private $usertype;


    public function __construct($uid, $pwd, $pwdRepeat, $email, $usertype)
    {

        $this->uid = $uid;

        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
        $this->usertype = $usertype;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=empty input");
            exit();
        }
        if ($this->invalidUid() == false) {
            header("location: ../index.php?error=invalid username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("location: ../index.php?error=email");
            exit();
        }
        if ($this->pwdMatch() == false) {
            header("location: ../index.php?error=passwords dont match");
        }
        if ($this->uidTakenCheck() == false) {
            echo "Username already taken. Please choose a different username.";
            header("location: ../signup.php?error=Please choose a different username");
        }

        $this->setUser($this->uid, $this->pwd, $this->email, $this->usertype);
    }

    private function emptyInput()
    {

        if (empty($this->uid) || empty($this->pwd) | empty($this->pwdRepeat) || empty($this->email) || empty($this->usertype)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid()
    {

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function invalidEmail()
    {

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch()
    {


        if ($this->pwd == $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }




    private function uidTakenCheck()
    {


        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
