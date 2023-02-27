<?php
$pageHeader = 'Это мой первый сайт на PHP';
$user = null;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

require_once 'view/home.php';
