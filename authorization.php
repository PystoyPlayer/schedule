<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="resources/css/auth.css">
</head>
<body>

<!-- Форма авторизаций -->

    <form action="vendor/signin.php" method="post">
        <label for="">Логин</label>
        <input type="text" name="login" placeholder="Введите ваш логин">
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            Увас нету аккаунта? - <a href="http://localhost/subvost/registration.php">Зарегистрироватся</a>
        </p>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>