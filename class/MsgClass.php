<?php
class Msg
{
    private $mysqli;

    function __construct($mysqli)
    {
        session_start();
        $this->mysqli = $mysqli;
    }

    /*
    ** 取得留言資料
    */
    function getMsg()
    {
        $sql = "SELECT member.name,message.id,message.message,message.update_at,message.memberId FROM message,member WHERE member.id=message.memberId ORDER BY update_at  DESC";
        $result = mysqli_query($this->mysqli, $sql);
        $num = mysqli_num_rows($result); //取得數量
        for ($i = 0; $i < $num; $i++) {
            $search[$i] = mysqli_fetch_assoc($result);
        }
        return $search;
    }

    /*
    ** 新增留言
    */
    function addMsg()
    {
        $message = $_POST['Msg'];
        $memberId = $_SESSION['id'];
        $newMsg = str_replace("<", "&lt;", $message);
        $sql = "INSERT INTO message(memberId,message)VALUES(?,?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('is', $memberId, $newMsg);
        $stmt->execute();
        echo 'true';
        mysqli_close($this->mysqli);
    }

    /*
    ** 修改留言
    */
    function changMsg()
    {
        $id = $_POST['id'];
        $message = $_POST['Msg'];
        $newMsg = str_replace("<", "&lt;", $message);
        $sql = "UPDATE message SET message = ? WHERE id = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('si', $newMsg, $id);
        $stmt->execute();
        echo 'true';
        mysqli_close($this->mysqli);
    }

    /*
    ** 刪除留言
    */
    function delMsg()
    {
        $id = $_POST['id'];
        $sql = "DELETE FROM message WHERE id = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        echo 'true';
        mysqli_close($this->mysqli);
    }
}
?>