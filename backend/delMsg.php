<?php
require_once("sql.php");
session_start();
$id = $_POST['id'];


$sql = "DELETE FROM message WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

echo 'true';

mysqli_close($mysqli);
