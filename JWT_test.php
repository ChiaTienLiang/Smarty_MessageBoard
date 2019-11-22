<?php

$key = 'PID_Tien';

$header = [
    'type' => 'JWT',
    'alg' => 'HS256'
];

$header = json_encode($header);
$header = base64_encode($header);

// print_r($header);
// exit;

$payload = [
    'id' => '1',
    'username' => 'Brad',
    'level' => '1'
];

$payload = json_encode($payload);
// $payload = base64_encode($payload);

// echo "$header.$payload";

$signature = hash_hmac('sha256', "$header.$payload", $key, true);
$signature = base64_encode($signature);


$token = "$header.$payload.$signature";


// $test = hash_hmac('sha256', "$payload", $key, true);
// $newTest = base64_encode($test);
$test1 = hash_hmac('sha256', "$payload", $key, false);
// echo $test1;
$test2 = base64_encode($test1);
$test3 = base64_decode($test2);
// echo $test1;
// echo $test3;
// if ($test1 === $test3)
//     echo 'V';
// else
//     echo 'X';
