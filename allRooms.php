<?php

require_once 'api.php';
require_once 'check.php';

$data = [
    'user_id' => $_SESSION['userId']
];

$rooms = request('room/getall', $data);

require_once 'frontend/rooms.php';