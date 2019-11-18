<?php
require_once("sql.php");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM member Where email = ?"; //確認是否有該email
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows != 0) {
    $memberData = $result->fetch_object();
    $pwd = $memberData->password;
    $test = password_verify($password, $pwd);
    if ($test != 1) {
        mysqli_free_result($result);
        echo 'false';
    } else {
        session_start();
        $_SESSION['name'] = $memberData->name;
        $_SESSION['level'] = $memberData->level;
        $_SESSION['id'] = $memberData->id;
        echo 'true';
    }
} else {
    mysqli_free_result($result);
    echo 'false';
}
mysqli_close($mysqli);
