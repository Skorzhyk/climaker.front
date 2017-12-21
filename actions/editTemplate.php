<?php

require_once '../api.php';

$data = [
    'id' => $_REQUEST['id'],
    'name' => $_REQUEST['name'],
    'temperature' => $_REQUEST['temperature'],
    'humidity' => $_REQUEST['humidity']
];

request('template/edit', $data);

header('Location: ../templates.php');