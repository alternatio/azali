<?php

require_once '../../helpers/db.php';

$email = $_SESSION['userEmail'];
$userId = $_SESSION['userId'];
$message = $_POST['message'];

if ($userId && $email) {
  $connection = $_SESSION['connection'];

  $sqlResponse = "INSERT INTO `applications` (`id`, `userId`, `userEmail`, `message`) VALUES (NULL, '$userId', '$email', '$message');";

  $response = $connection -> query($sqlResponse);

  var_dump($response);

  if ($response) {
    $_SESSION['errorTextLogin'] = 'Успешно';
  } else {
    $_SESSION['errorTextLogin'] = 'Ваша заявка не отправлена, советуем вам связаться с администратором';
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);

} else {
  header('Location: ' . '/');
}
