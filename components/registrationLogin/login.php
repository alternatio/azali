<?php
session_start();
?>

<section class='wrapper registrationLoginWrapper'>
  <img class='registrationLoginBackground' src='/public/images/loginBackground.png' alt='login'>
  <div class='inner registrationLogin'>
    <span class='registrationLoginTitle'>
      авторизация
    </span>
    <form class='registrationLoginForm' action='/components/registrationLogin/methodLogin.php' method='post'>
      <label class='label'>
        <input class='input' name='email' type='text' placeholder='Email' required>
      </label>
      <label class='label'>
        <input class='input' name='password' type='text' placeholder='Пароль' required>
      </label>
      <label class='labelCheckbox'>
        <input class='inputCheckbox' type='checkbox' required>
        Согласие с правилами сайта
      </label>

      <?php
      if (isset($_SESSION['errorTextLogin'])) {
        echo "<p class='error'>" . $_SESSION['errorTextLogin'] . "</p>";
      }
      ?>
      <button class='outline-button registrationLoginButton' type='submit'>
        Авторизироваться
      </button>
    </form>
  </div>
</section>