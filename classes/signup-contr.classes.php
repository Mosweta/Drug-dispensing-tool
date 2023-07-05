<?php
class Signupcontr extends Signup
{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;


    public function __construct($uid, $pwd, $pwdRepeat, $email,)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
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
            header("location: ../index.php?error=Username or email taken");
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput()
    {

        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
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
