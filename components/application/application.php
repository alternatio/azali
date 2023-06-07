<?php
session_start();
?>

<section class="wrapper registrationLoginWrapper">
  <img class='registrationLoginBackground' src='/public/images/loginBackground.png' alt='login'>
  <div class='inner registrationLogin'>
    <span class='registrationLoginTitle'>
      Оставить заявку
    </span>
    <form class='registrationLoginForm' action='/components/application/methodApplication.php' method='post'>
      <label class='label textareaLabel'>
        <textarea class='textarea' name='message' placeholder='Какую услугу вы бы хотели приобрести? Когда оказать её?' required maxlength="240"></textarea>
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
        Отправка заявки
      </button>
    </form>
  </div>
</section>
