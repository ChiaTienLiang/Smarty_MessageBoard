<?php

/**
 * Example Application
 *
 * @package Example-application
 */
require_once '../libs/Smarty.class.php';
require_once 'sql.php';
require_once '../class/MsgClass.php';

$smarty = new Smarty;
// $token = new Token($mysqli);
$Msg = new Msg($mysqli);
// $e = $token->smartyUse();
//$smarty->force_compile = true;
$smarty->debugging = true;
// $smarty->caching = true;
// $smarty->cache_lifetime = 120;


if (isset($_SESSION['level'])) $level = $_SESSION['level'];
else $level = NULL;
if (isset($_SESSION['name'])) $name = $_SESSION['name'];
else $name = 'Guest';
if (isset($_SESSION['memberId'])) $memberId = $_SESSION['memberId'];
else $memberId = NULL;


$smarty->assign("name", $name);
$smarty->assign("level", $level);
$smarty->assign("memberId", $memberId);

$count = $Msg->countPage();
$smarty->assign("page", $count);

$test = $_SERVER['REQUEST_URI'];
$test = explode("page=", $test);
if (sizeof($test) === 2) {
    $test = $test[1];
    $page = (int) $test;
    if ($page > $count) {
        $page = $count;
    } elseif ($page <= 0) {
        $page = 1;
    } else {
        $page = $page;
    }
} else {
    $page = 1;
}

// $page = implode($test);
$smarty->assign("pagecss", $page);

$search = $Msg->getMsg($page);
$smarty->assign("res", $search);


$smarty->display('../templates/home.html');
