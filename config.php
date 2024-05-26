<?php

date_default_timezone_set('Asia/Manila');

$db_host = 'localhost';
$db_name = 'SDAIC';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);