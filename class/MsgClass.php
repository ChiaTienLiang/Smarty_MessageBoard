<?php

/**
 * 留言相關
 */
class Msg
{
    private $mysqli;

    function __construct($mysqli)
    {
        session_start();
        $this->mysqli = $mysqli;
    }

    /**
     * 取得留言資料
     */
    function getMsg()
    {
        $sql = "SELECT member.name,message.id,message.message,message.update_at,message.memberId
            FROM message,member WHERE member.id=message.memberId ORDER BY update_at  DESC";
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
     * 新增留言
     */
    function addMsg($message, $memberId)
    {
        $newMsg = str_replace("<", "&lt;", $message);
        $sql = "INSERT INTO message(memberId,message)VALUES(?,?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('is', $memberId, $newMsg);
        $return = $stmt->execute();
        mysqli_close($this->mysqli);
        return $return;
    }

    /**
     * 修改留言
     */
    function changMsg($message, $id)
    {
        $newMsg = str_replace("<", "&lt;", $message);
        $sql = "UPDATE message SET message = ? WHERE id = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('si', $newMsg, $id);
        $return = $stmt->execute();
        mysqli_close($this->mysqli);
        return $return;
    }

    /**
     * 刪除留言
     */
    function delMsg($id, $memberId)
    {
        $sql = "DELETE FROM message WHERE id = ? AND memberId = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('ii', $id, $memberId);
        $return = $stmt->execute();
        mysqli_close($this->mysqli);
        return $return;
    }
}
