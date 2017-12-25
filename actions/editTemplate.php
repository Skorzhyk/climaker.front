<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/api.php';

if (!empty($_REQUEST['id'])) {
    $data = [
        'id' => $_REQUEST['id'],
        'name' => $_REQUEST['name'],
        'temperature' => $_REQUEST['temperature'],
        'humidity' => $_REQUEST['humidity']
    ];

    request('template/edit', $data);
} else {
    $data = [
        'name' => $_REQUEST['name'],
        'user_id' => $_SESSION['userId'],
        'temperature' => $_REQUEST['temperature'],
        'humidity' => $_REQUEST['humidity']
    ];

    request('template/create', $data);
}

header('Location: /templates.php');