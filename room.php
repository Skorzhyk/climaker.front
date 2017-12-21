<?php

require_once 'api.php';
require_once 'check.php';

if (!empty($_REQUEST['id'])) {
    $data = [
        'id' => $_REQUEST['id']
    ];

    $room = request('room/get', $data);
}

require_once 'frontend/roomData.php';

