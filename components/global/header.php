<?php
session_start();
$userEmail = $_SESSION['userEmail'];
?>

<div class='headerWrapper'>
  <header class='header'>
    <a class='logo' href='/'>
      <img class='logo' src='/public/images/logo.png' alt='logo'>
    </a>
    <nav class='header__links'>
<!--      <a class='header__link' href='/'>-->
<!--        Главная-->
<!--      </a>-->
<!--      <a class='header__link' href='#'>-->
<!--        Услуги-->
<!--      </a>-->
<!--      <a class='header__link' href='#'>-->
<!--        Дополнительные услуги-->
<!--      </a>-->
    </nav>
    <?php if (!isset($userEmail)) {
    	echo "<div class='header__buttons'>
        <a class='outline-button' href='/login.php'>
          Войти
        </a>
        <a class='flat-button' href='/registration.php'>
          Зарегистрироваться
        </a>
      </div>";
    } else if ($userEmail == 'admin') {
      echo "<div class='header__buttons'>"
        . $userEmail .
        "
        <a class='outline-button' href='/admin.php'>
          Админка
        </a>
        <a class='flat-button' href='/components/registrationLogin/logoutMethod.php'>
          Выйти
        </a>
      </div>";
    } else {
    	echo "<div class='header__buttons'>"
        . $userEmail .
        "<a class='flat-button' href='/components/registrationLogin/logoutMethod.php'>
          Выйти
        </a>
      </div>";
    } ?>
  </header>
</div>