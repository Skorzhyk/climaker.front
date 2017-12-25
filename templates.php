<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/api.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/check.php';

$data = [
    'user_id' => $_SESSION['userId']
];

$templates = request('template/getall', $data);

require_once 'frontend/templates.php';