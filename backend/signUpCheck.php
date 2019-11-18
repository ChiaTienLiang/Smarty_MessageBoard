<?php
require_once("sql.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM member Where email = ?"; //確認email是否已被註冊
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows != 0) {
    mysqli_free_result($result);
    echo 'false';
} else {
    $sql = "INSERT INTO member(name,email,password)VALUES(?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss', $name, $email, $password);
    $stmt->execute();
    echo 'true';
}
mysqli_close($mysqli);
