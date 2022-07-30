<?php

session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'home';
    }
}

if (!isset($_SESSION['user_name'])) {
    $_SESSION['user_name'] = '';
}

switch ($action) {
    case 'home':
        include 'View/home.php';
    break;
}

