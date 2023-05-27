<?php

require_once '../../helpers/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

if ($password && $email) {
  $connection = $_SESSION['connection'];

  $sqlResponse = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

  $response = $connection -> query($sqlResponse);

  if ($response->num_rows) {
    $_SESSION['userEmail'] = $email;
    $_SESSION['errorTextLogin'] = 'Успешно';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die('Успешно');
  } else {
    $_SESSION['errorTextLogin'] = 'Такого пользователя не существует';
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '/login.php');
    die('Такого пользователя не существует');
  }
} else {
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
