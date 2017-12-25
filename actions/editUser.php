<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/api.php';

$data = [
    'id' => $_REQUEST['id'],
    'name' => $_REQUEST['name'],
    'surname' => $_REQUEST['surname'],
    'telephone_number' => $_REQUEST['telephone_number'],
    'current_password' => $_REQUEST['current_password'],
    'new_password' => $_REQUEST['new_password']
];

$response = request('user/edit', $data);

if ($response) {
    $response = 'bad';
}

header('Location: /user.php?response=' . $response);