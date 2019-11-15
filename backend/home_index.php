<?php
session_start();
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';
require 'sql.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


//使用者資訊(確認是否登入)
if (isset($_SESSION['level'])) $level = $_SESSION['level'];
else $level = NULL;
if (isset($_SESSION['name'])) $name = $_SESSION['name'];
else $name = 'Guest';
if (isset($_SESSION['id'])) $memberId = $_SESSION['id'];
else $memberId = NULL;

$smarty->assign("name", $name);
$smarty->assign("level", $level);
$smarty->assign("memberId", $memberId);


//撈留言板資料
$sql = "SELECT member.name,message.id,message.message,message.update_at,message.memberId FROM message,member WHERE member.id=message.memberId ORDER BY update_at  DESC";
$result = mysqli_query($mysqli, $sql);
$num = mysqli_num_rows($result); //取得數量
for ($i = 0; $i < $num; $i++) {
    $search[$i] = mysqli_fetch_assoc($result);
}
$smarty->assign("res", $search);


// require_once("sql.php");
// $sql = "SELECT member.name,message.id,message.message,message.create_at,message.memberId FROM message,member WHERE member.id=message.memberId ORDER BY create_at DESC";
// $result = mysqli_query($mysqli, $sql);
// $num = mysqli_num_rows($result); //取得數量
// for ($i = 0; $i < $num; $i++) {
//     $search[$i] = mysqli_fetch_assoc($result);
// }

// echo json_encode($search);

// mysqli_close($mysqli);
$smarty->display('../templates/home.html');