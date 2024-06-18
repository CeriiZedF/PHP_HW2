<?php
session_start();

if (!isset($_SESSION['session_id'])) {
    $_SESSION['session_id'] = 0;
}

// Перевіряємо значення session_id
$session_id = $_SESSION['session_id'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Введення чисел</title>
</head>
<body>
<!--    <form action="calculate.php" method="post">-->
<!--        <label for="num1">Перше число:</label>-->
<!--        <input type="number" id="num1" name="num1" required>-->
<!--        <br>-->
<!--        <label for="num2">Друге число:</label>-->
<!--        <input type="number" id="num2" name="num2" required>-->
<!--        <br>-->
<!--        <label for="month">Місяць:</label>-->
<!--        <input type="number" id="month" name="month" required>-->
<!--        <br>-->
<!--        <input type="submit" value="Обчислити">-->
<!--    </form>-->
<?php if ($session_id == 0): ?>
    <form action="register.php" method="post">
        <label for="username">Логін:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Увійти</button>
    </form>
<?php elseif ($session_id == 1): ?>
    <p>Ви зареєстровані, увійдіть</p>
<?php endif; ?>
</body>
</html>
