<?php

require_once 'api.php';
require_once 'check.php';

$data = [
    'id' => $_SESSION['userId']
];

$user = request('user/get', $data);
if (!empty($_REQUEST['response'])) {
    $response = 'Incorrect password';
} else {
    $response = '';
}

require_once 'frontend/userData.php';

