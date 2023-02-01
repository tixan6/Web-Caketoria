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
      <form action="#" method="POST" class="register">
        <p>Введите логин</p>
        <input type="text" placeholder="Имя" required="" oninvalid="setCustomValidity('Введите имя')"
          oninput="setCustomValidity('')">
        <input type="text" <input type="password" class="password-input" name="pass" required=""
          pattern="^(?=.*\d)\w{3,20}$"
          oninvalid="setCustomValidity('Пароль от 3 до 20 символов. Должен содержать латиницу + цифры (минимум 1 цифру)')"
          oninput="setCustomValidity('')" placeholder="Пароль"><br>
        <button type="submit">Войти</button>
      </form>
    </div>
  </div>
</body>

</html>
