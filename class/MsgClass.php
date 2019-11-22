<?php
require_once 'tokenClass.php';
/**
 * 留言相關
 */
class Msg  extends Token
{
    // private $mysqli;

    // function __construct($mysqli)
    // {
    //     session_start();
    //     $this->mysqli = $mysqli;
    // }

    /**
     * 取得留言資料
     */
    public function getMsg($page)
    {
        $max = 5;
        $page = ($page - 1) * $max;
        $sql = "SELECT member.name,message.id,message.message,message.create_at,message.update_at,message.memberId
            FROM message,member WHERE member.id=message.memberId ORDER BY create_at  DESC limit $page,$max ";
        $result = mysqli_query($this->mysqli, $sql);
        $num = mysqli_num_rows($result); //取得數量
        for ($i = 0; $i < $num; $i++) {
            $search[$i] = mysqli_fetch_assoc($result);
        }
        mysqli_free_result($result);
        mysqli_close($this->mysqli);
        return $search;
    }

    /**
     * 取得留言總數
     */
    public function countMsg()
    {
        $sql = "SELECT * FROM message";
        $result = mysqli_query($this->mysqli, $sql);
        // $count = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        return $count;
    }

    /**
     * 新增留言
     */
    public function addMsg($Msg, $token)
    {
        Token::checkToken($token);
        $newMsg = str_replace("<", "&lt;", $Msg);
        $sql = "INSERT INTO message(memberId,message)VALUES(?,?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('is', $this->memberId, $newMsg);
        $return = $stmt->execute();
        mysqli_close($this->mysqli);
        return $return;
    }

    /**
     * 修改留言
     */
    public function changMsg($Msg, $id, $token)
    {
        Token::checkToken($token);
        $newMsg = str_replace("<", "&lt;", $Msg);
        $sql = "UPDATE message SET message = ? WHERE id = ? AND memberId = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('sii', $newMsg, $id, $this->memberId);
        $return = $stmt->execute();
        mysqli_close($this->mysqli);
        return $return;
    }

    /**
     * 刪除留言
     */
    public function delMsg($id, $token)
    {
        Token::checkToken($token);
        if ($this->level === 1) {
            $sql = "DELETE FROM message WHERE id = ?";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param('i', $id);
            $return = $stmt->execute();
            mysqli_close($this->mysqli);
            return $return;
        } else {
            $sql = "DELETE FROM message WHERE id = ? AND memberId = ?";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param('ii', $id, $this->memberId);
            $return = $stmt->execute();
            mysqli_close($this->mysqli);
            return $return;
        }
    }
}
