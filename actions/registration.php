<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/api.php';

$data = [
    'email' => $_REQUEST['email'],
    'password' => $_REQUEST['password'],
    'name' => $_REQUEST['name'],
    'surname' => $_REQUEST['surname'],
    'telephone_number' => $_REQUEST['telephone_number']
];

$userId = request('user/create', $data);

if ($userId) {
    session_start();

    $_SESSION['userId'] = $userId;

    header('Location: /');
} else {
    $response = 'This e-mail address has already been registered';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/registration.php';
}