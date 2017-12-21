<?php

session_start();

if (empty($_SESSION['userId'])) {
    $url = $_SERVER['REQUEST_URI'];
    require_once 'frontend/login.php';

    exit();
}