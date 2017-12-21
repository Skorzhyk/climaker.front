<?php

session_start();

require_once '../api.php';

if (!empty($_REQUEST['id'])) {
    $data = [
        'id' => $_REQUEST['id'],
        'name' => $_REQUEST['name'],
        'custom_temperature' => $_REQUEST['temperature'],
        'custom_humidity' => $_REQUEST['humidity']
    ];

    request('room/edit', $data);

    header('Location: ../room.php?id=' . $_REQUEST['id']);
} else {
    $data = [
        'name' => $_REQUEST['name'],
        'user_id' => $_SESSION['userId'],
        'custom_temperature' => $_REQUEST['temperature'],
        'custom_humidity' => $_REQUEST['humidity']
    ];

    request('room/create', $data);

    header('Location: ../');
}
