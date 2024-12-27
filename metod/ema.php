
<?php
$subject = 'Связь';
$to ="portnovmixail@bk.ru";
$tema='отзывы и предложения';
$name = htmlspecialchars($_POST['name']);
$famili = htmlspecialchars($_POST['famili']);
$email = htmlspecialchars($_POST['email']);
$namber = htmlspecialchars($_POST['namber']);
$comment = htmlspecialchars($_POST['comment']);
$message = "$name $famili $email $comment";
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
mail($to, $subject, $namber, $message , $headers);
?>
