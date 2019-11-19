<?php
class Member
{
    private $mysqli;

    function __construct($mysqli)
    {
        session_start();
        $this->mysqli = $mysqli;
    }

    /*
    ** 註冊
    */
    function signUp()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM member Where email = ?"; //確認email是否已被註冊
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows != 0) {
            mysqli_free_result($result);
            echo 'false';
        } else {
            $sql = "INSERT INTO member(name,email,password)VALUES(?,?,?)";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param('sss', $name, $email, $password);
            $stmt->execute();
            echo 'true';
        }
        mysqli_close($this->mysqli);
    }

    /*
    ** 登入
    */
    function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM member Where email = ?"; //確認是否有該email
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows != 0) {
            $memberData = $result->fetch_object();
            $pwd = $memberData->password;
            $test = password_verify($password, $pwd);
            if ($test != 1) {
                mysqli_free_result($result);
                echo 'false';
            } else {
                $_SESSION['name'] = $memberData->name;
                $_SESSION['level'] = $memberData->level;
                $_SESSION['id'] = $memberData->id;
                echo 'true';
            }
        } else {
            mysqli_free_result($result);
            echo 'false';
        }
        mysqli_close($this->mysqli);
    }

    /*
    ** 登出
    */
    function logout()
    {
        session_destroy();
        echo 'true';
    }
}
?>