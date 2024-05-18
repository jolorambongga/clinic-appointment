<?php

date_default_timezone_set('Asia/Manila');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'SDAIC';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo '<script>console.log("CONNECT FAILED!");'.mysqli_connect_error().'</script>';
} else {
    echo '<script>console.log("CONNECTED SUCCESSFULLY!");</script>';
}
