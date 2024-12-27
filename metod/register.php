<?php
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "Заполните все поля";
} else {
    if ($pass != $repeatpass) {
        echo "Пароли не совпадпют";
    } else {
        $sql = "INSERT INTO `use` (login,pass,email) VALUES ('$login', '$pass', '$email' )";
        if($conn->query($sql)=== TRUE){
            header('Refresh:3; url=../index.php');
            echo 'Реристрация успешно завершена. Переход на страницу меню через 3 секунды...';
            exit;
        }
        else{
            echo"Ошибка:" . $conn->error;
        }
    }
}
