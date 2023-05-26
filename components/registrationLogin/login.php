<section class='wrapper registrationLoginWrapper'>
  <img class='registrationLoginBackground' src='/public/images/loginBackground.png' alt='login'>
  <div class='inner registrationLogin'>
    <span class='registrationLoginTitle'>
      авторизация
    </span>
    <form class='registrationLoginForm' action='./methodLogin.php' method='post'>
      <label class='label'>
        <input class='input' name='numberPhone' type='text' placeholder='Номер телефона'>
      </label>
      <label class='label'>
        <input class='input' name='password' type='text' placeholder='Пароль'>
      </label>
      <label class='labelCheckbox'>
        <input class='inputCheckbox' type='checkbox'>
        Согласие с правилами регистрации
      </label>
      <button class='outline-button registrationLoginButton'>
        Авторизироваться
      </button>
    </form>
  </div>
</section>