<?php
require_once './backend/sql.php';
require_once './class/MsgClass.php';


$getMsg = new Msg($mysqli);

switch ($_POST['todo']) {
    case 'addMsg':
        $Msg = $_POST['Msg'];
        $memberId = $_SESSION['memberId'];
        $return = $getMsg->addMsg($Msg, $memberId);
        echo json_encode($return);
        break;
    case 'changMsg':
        $Msg = $_POST['Msg'];
        $id = $_POST['id'];
        $return = $getMsg->changMsg($Msg, $id);
        echo json_encode($return);
        break;
    case 'delMsg':
        $id = $_POST['id'];
        $memberId = $_SESSION['memberId'];
        $return = $getMsg->delMsg($id, $memberId);
        echo json_encode($return);
        break;
    default:
        echo json_encode(false);
        break;
}
