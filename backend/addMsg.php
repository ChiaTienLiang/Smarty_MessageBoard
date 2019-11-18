<?php
require_once("sql.php");
session_start();
$message = $_POST['Msg'];
$memberId = $_SESSION['id'];
$newMsg = str_replace("<", "&lt;", $message);

$sql = "INSERT INTO message(memberId,message)VALUES(?,?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('is', $memberId, $newMsg);
$stmt->execute();

echo 'true';

mysqli_close($mysqli);
