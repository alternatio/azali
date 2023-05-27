<?php

require_once '../../helpers/db.php';

$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$numberPhone = $_POST['numberPhone'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];

if ($password === $passwordRepeat && $password && $email) {
  $connection = $_SESSION['connection'];

  $sqlResponse = "SELECT * FROM `users` WHERE `email` = '$email'";

  $response = $connection -> query($sqlResponse);

  if ($response->num_rows) {
    $_SESSION['errorText'] = 'Такой пользователь уже существует';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die('Такой пользователь уже существует!');
  } else {
    $sqlResponse = "INSERT INTO `users` (`name`, `surname`, `patronymic`, `numberPhone`, `email`, `password`) VALUES ('$name', '$surname', '$patronymic', '$numberPhone', '$email', '$password');";

    $connection -> query($sqlResponse);

    $_SESSION['errorText'] = 'Успешно';
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '/login.php');
    die('Успешно');
  }
} else {
  $_SESSION['errorText'] = 'Введите верные значения, вам необходимо заполнить обязательные поля. Обязательные поля: пароль, повтор пароля и почта';
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  die('Не заполнены обязательные поля, где были звёздочки(*)');
}
