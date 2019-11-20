<?php

/**
 * 會員相關
 */
class Member
{
    private $mysqli;

    function __construct($mysqli)
    {
        session_start();
        $this->mysqli = $mysqli;
    }

    /**
     * 註冊
     */
    function signUp($name, $email, $password)
    {
        $sql = "SELECT * FROM member Where email = ?"; //確認email是否已被註冊
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            $sql = "INSERT INTO member(name,email,password)VALUES(?,?,?)";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param('sss', $name, $email, $password);
            $return = $stmt->execute();
            mysqli_close($this->mysqli);
            return $return;
        } else {
            mysqli_free_result($result);
            mysqli_close($this->mysqli);
            return false;
        }
    }

    /**
     * 登入
     */
    function login($email, $password)
    {
        $sql = "SELECT * FROM member Where email = ?"; //確認是否有該email
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {  //email不存在
            mysqli_free_result($result);
            mysqli_close($this->mysqli);
            return false;
        } else {
            $memberData = $result->fetch_object();
            $pwd = $memberData->password;
            $test = password_verify($password, $pwd); //hash比對
            if ($test === true) {
                $_SESSION['name'] = $memberData->name;
                $_SESSION['level'] = $memberData->level;
                $_SESSION['memberId'] = $memberData->id;
                mysqli_close($this->mysqli);
                mysqli_free_result($result);
                return true;
            } else {
                mysqli_free_result($result);
                mysqli_close($this->mysqli);
                return false;
            }
        }
    }

    /**
     * 登出
     */
    function logout()
    {
        session_destroy();
        return true;
    }
}
