<?php

require_once 'api.php';
require_once 'check.php';

$data = [
    'user_id' => $_SESSION['userId']
];

$templates = request('template/getall', $data);

require_once 'frontend/templates.php';