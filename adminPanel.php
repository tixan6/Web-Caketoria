<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/adminPanel.css">
  <title>adminPanel</title>
</head>

<body>
  <div class="main">
    <div class="container">
      <div action="#" class="register">
        <div class="centerError">
          <p>Неправильный логин или пароль</p>
        </div>
        <p>Введите логин</p>

        <input type="text" placeholder="Логин" required="" oninvalid="setCustomValidity('Введите имя')"
          oninput="setCustomValidity('')" class="login-panel">

        <input type="password" class="password-input" name="pass" required=""
          pattern="^(?=.*\d)\w{3,20}$"
          oninvalid="setCustomValidity('Пароль от 3 до 20 символов. Должен содержать латиницу + цифры (минимум 1 цифру)')"
          oninput="setCustomValidity('')" placeholder="Пароль"><br>
        <a href="#"  class="Btnsubmit-admin">Войти</a>
    </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="/js/adminLog.js"></script>
</body>
</html>
