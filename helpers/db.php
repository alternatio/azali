<?php
session_start();

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'azali';

$connection = mysqli_connect($serverName, $userName, $password, $dbName);

$_SESSION['connection'] = $connection;

if (!$connection) {
  die('connection failed' . mysqli_connect_error());
}