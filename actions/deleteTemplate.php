<?php

require_once '../api.php';

$data = [
    'id' => $_REQUEST['id']
];

request('template/delete', $data);

header('Location: ../templates.php');