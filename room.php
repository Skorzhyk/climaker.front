<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/api.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/check.php';

if (!empty($_REQUEST['id'])) {
    $data = [
        'id' => $_REQUEST['id']
    ];

    $room = request('room/get', $data);
}

$data = [
    'user_id' => $_SESSION['userId']
];

$templates = request('template/getall', $data);

require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/roomData.php';

