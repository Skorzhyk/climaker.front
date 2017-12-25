<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/api.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/check.php';

$data = [
    'id' => $_SESSION['userId']
];

$user = request('user/get', $data);
if (!empty($_REQUEST['response'])) {
    $response = 'Incorrect password';
} else {
    $response = '';
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/userData.php';

