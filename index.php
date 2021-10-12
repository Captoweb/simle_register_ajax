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
        <h1>Ajax form</h1>
        <label>Логин</label>
        <input type="text" name="login"  placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="login-btn">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрироваться</a>
        </p>
        <p class="msg none">Lorem ipsum dolor sit amet</p>
    </form>


<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>





