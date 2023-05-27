<?php

session_start();
?>

<section class='wrapper registrationLoginWrapper'>
  <img class='registrationLoginBackground' src='/public/images/loginBackground.png' alt='login'>
  <div class='inner registrationLogin'>
    <span class='registrationLoginTitle'>
      регистрация
    </span>
    <span class='registrationLoginDescription'>
      Заполните необходимые поля, чтобы зарегистрироваться и забронировать номер
    </span>
    <form class='registrationLoginForm' action='/components/registrationLogin/methodRegistration.php' method='post'>
      <label class='label'>
        <input class='input' name='surname' type='text' placeholder='Фамилия'>
      </label>
      <label class='label'>
        <input class='input' name='name' type='text' placeholder='Имя'>
      </label>
      <label class='label'>
        <input class='input' name='patronymic' type='text' placeholder='Отчество'>
      </label>
      <label class='label'>
        <input class='input' name='numberPhone' type='text' placeholder='Номер телефона'>
      </label>
      <label class='label'>
        <input class='input' name='email' type='text' required placeholder='Email*'>
      </label>
      <label class='label'>
        <input class='input' name='password' type='text' required placeholder='Пароль*'>
      </label>
      <label class='label'>
        <input class='input' name='passwordRepeat' type='text' required placeholder='Повтор пароля*'>
      </label>
      <label class='labelCheckbox'>
        <input class='inputCheckbox' type='checkbox' required>
        Согласие с правилами регистрации
      </label>

      <?php
      if (isset($_SESSION['errorTextLogin'])) {
        echo "<p class='error'>" . $_SESSION['errorText'] . "</p>";
      }
      ?>
      <button class='outline-button registrationLoginButton' type='submit'>
        Зарегистрироваться
      </button>
    </form>
  </div>
</section>