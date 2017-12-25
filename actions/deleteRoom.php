<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/api.php';

$data = [
    'id' => $_REQUEST['id']
];

request('room/delete', $data);

header('Location: /');