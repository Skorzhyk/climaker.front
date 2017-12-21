<?php

require_once '../api.php';

$data = [
    'email' => $_REQUEST['email'],
    'password' => $_REQUEST['password']
];

$userId = request('user/login', $data);

if ($userId) {
    session_start();

    $_SESSION['userId'] = $userId;

    header('Location: ../');
} else {
    $response = 'Incorrect email or password';

    require_once '../frontend/login.php';
}