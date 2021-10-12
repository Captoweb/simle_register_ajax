<?php session_start();
if($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<!-- auth form-->
<form>
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите своё полное имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Почта</label>

    <input type="email" name="email" placeholder="Введите адрес своей почты">
    <label>Изображение профиля</label>
    <input type="file" name="avatar" placeholder="">
    <label>Пароль</label>

    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit" class="register-btn">зарегистрироваться</button>
    <p>
        У вас уже есть аккаунт? - <a href="index.php">авторезироваться</a>
    </p>

    <p class="msg none">lorem ipsum</p>

</form>


<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>











