<?php
require_once("sql.php");
session_start();
$id = $_POST['id'];
$message = $_POST['Msg'];
$newMsg = str_replace("<", "&lt;", $message);

$sql = "UPDATE message SET message = ? WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('si', $newMsg, $id);
$stmt->execute();

// echo 'true';

mysqli_close($mysqli);
