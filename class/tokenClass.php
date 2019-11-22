<?php

/**
 * 處理前端token
 */
class Token
{
    protected $mysqli;
    public $name;
    public $memberId;
    public $level;
    public function __construct($mysqli)
    {
        session_start();
        $this->mysqli = $mysqli;
    }
    public function checkToken($token)
    {
        $sql = "SELECT * FROM member Where token= ?"; //確認該token是否存在
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('s', $token);
        $stmt->execute();
        $result = $stmt->get_result();
        $memberData = $result->fetch_object();
        $this->name = $memberData->name;
        $this->level = $memberData->level;
        $this->memberId = $memberData->id;
        return $memberData;
    }

}
