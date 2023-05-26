<section class='wrapper registrationLoginWrapper'>
  <img class='registrationLoginBackground' src='/public/images/loginBackground.png' alt='login'>
  <div class='inner registrationLogin'>
    <span class='registrationLoginTitle'>
      регистрация
    </span>
    <span class='registrationLoginDescription'>
      Заполните необходимые поля, чтобы зарегистрироваться и забронировать номер
    </span>
    <form class='registrationLoginForm' action='./methodLogin.php' method='post'>
      <label class='label'>
        <input class='input' name='numberPhone' type='text'>
      </label>
      <label class='label'>
        <input class='input' name='password' type='text'>
      </label>
      <label for=''>
        <input class='inputCheckbox' type='checkbox'>
      </label>
      <button class='outline-button registrationLoginButton'>
        Авторизироваться
      </button>
    </form>
  </div>
</section>