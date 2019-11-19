<?php
require_once './class/MemberClass.php';
require_once 'backend/sql.php';

$member = new Member($mysqli);

switch ($_POST['todo']) {
    case 'login':
        $member->login();
        break;
    case 'logout':
        $member->logout();
        break;
    case 'signUp':
        $member->signUp();
        break;
}
?>