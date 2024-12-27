<?php
require_once('db.php');
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$dastname = $_POST['dastname'];
$namber = $_POST['namber'];
$address = $_POST['address'];
$email = $_POST['email'];

if (empty($name) || empty($lastname) || empty($dastname) || empty($namber)|| empty($address)|| empty($email)) {
    echo "Заполните все поля";
} else {
    if ($pass != $repeatpass    ) {
        echo "Пароли не совпадпют";
    } else {
        $sql = "INSERT INTO `oplata` (name, lastname, dastname, namber, address, email) VALUES ('$name', '$lastname', '$dastname','$namber','$address','$email' )";
        if($conn->query($sql)=== TRUE){
            header('Refresh:3; url=../index.php');
            echo 'Оплата завершена успешно. Переход на страницу меню через 3 секунды...';
            exit;
        }
        else{
            echo"Ошибка:" . $conn->error;
        }
    }
}
