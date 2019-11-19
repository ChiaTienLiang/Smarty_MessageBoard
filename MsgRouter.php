<?php
require_once './backend/sql.php';
require_once './class/MsgClass.php';


$getMsg = new Msg($mysqli);

switch ($_POST['todo']) {
    case 'addMsg':
        $getMsg->addMsg();
        break;
    case 'changMsg':
        $getMsg->changMsg();
        break;
    case 'delMsg':
        $getMsg->delMsg();
        break;
}
?>