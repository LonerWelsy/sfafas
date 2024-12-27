<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if ($_POST['login'] == 'login' && $_POST['pass'] == 'pass') {
    $valid_user = TRUE;
} else {
    $valid_user = FALSE;
}

if ($valid_user) {
    header('Refresh:0; url=http://nnn/textolite/');
} else {

}
?>

<?php

if (empty($login) || empty($pass)) {
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM  `use` WHERE `login` ='$login' AND `pass`='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            header('Refresh:5; url=../index.php');
            echo 'Вход успешно завершен. Переход на страницу меню через 3 секунды...';
            exit;
        }
    } else {
        echo "Нет такого пользователя ";
    }
}
?>
