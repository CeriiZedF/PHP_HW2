<?php
session_start();

$correct_username = 'admin';
$correct_password = '2222';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $correct_username && $password == $correct_password) {
    $_SESSION['session_id'] = 1;
    header('Location: index.php');
    exit();
} else {
    echo "Неправильний логін або пароль. <a href='index.php'>Спробуйте ще раз</a>.";
}
?>
