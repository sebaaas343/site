<?php

error_reporting(E_ALL);
session_start();

include_once "functions.php";
$m = registration();
$message = authorization();
$user = getCurrentUser();


?>

<html lang="RU">

<head>
  <meta charset="UTF-8">
    <title>Изучаем PHP</title>
</head>

<body>

<h3>Регистрация</h3>


<?php if($m!=="Успешная авторизация!"): ?>
    <?php var_dump($m);?>
<p>
    <?php if ($m!=false) echo $m; ?>
</p>
<form method="post">
    <p>
        <input type="text" name="first_name" placeholder="Имя">
    </p>

    <p>
        <input type="text" name="last_name" placeholder="Фамилия">
    </p>

    <p>
        <input type="text" name="login" placeholder="Придумайте логин">
    </p>

    <p>
        <input type="text" name="password" placeholder="Придумайте пароль">
    </p>

    <input type="submit" value="Зарегистрироваться">

</form>

<?php else: ?>

<?php if (!empty($message)) echo $message; ?>


<?php if (isset($user)): ?>

    <h1>
        Привет, <?= $user->login; ?>
    </h1>

    <h2>
        Дата регистрации: <?= $user->getRegistrationDate(); ?>
    </h2>

<?php else: ?>

    <form method="post">

        <input type="text" name="login" placeholder="Введите логин">
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="submit" value="Войти">

    </form>




<?php endif; ?>


<?php endif; ?>


</body>

</html>