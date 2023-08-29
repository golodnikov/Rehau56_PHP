<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'alppro';

$connection = mysqli_connect($host, $username, $password, $dbname);

if (!$connection) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

return $connection;
?>