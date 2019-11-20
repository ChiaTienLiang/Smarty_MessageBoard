<?php
session_start();
/**
 * Example Application
 *
 * @package Example-application
 */
require_once '../libs/Smarty.class.php';
require_once 'sql.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
// $smarty->caching = true;
// $smarty->cache_lifetime = 120;

/*
 **使用者資訊(確認是否登入)
 */

if (isset($_SESSION['level'])) $level = $_SESSION['level'];
else $level = NULL;
if (isset($_SESSION['name'])) $name = $_SESSION['name'];
else $name = 'Guest';
if (isset($_SESSION['memberId'])) $memberId = $_SESSION['memberId'];
else $memberId = NULL;

$smarty->assign("name", $name);
$smarty->assign("level", $level);
$smarty->assign("memberId", $memberId);

/*
 **撈留言板資料
 */
$sql = "SELECT member.name,message.id,message.message,message.create_at,message.update_at,message.memberId FROM message,member WHERE member.id=message.memberId ORDER BY message.create_at  DESC";
$result = mysqli_query($mysqli, $sql);
$num = mysqli_num_rows($result); //取得數量
for ($i = 0; $i < $num; $i++) {
    $search[$i] = mysqli_fetch_assoc($result);
}
$smarty->assign("res", $search);

$smarty->display('../templates/home.html');
