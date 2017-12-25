<?php

require_once '../api.php';

$data = [
    'id' => $_REQUEST['id']
];

request('room/delete', $data);

header('Location: ../');