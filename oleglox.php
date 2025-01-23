<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'напишите ваш email здесь';
    $subject = 'Новое сообщение от ' . $name;
    $headers = 'From: ' . $email;
    
    $body = "Имя: $namenn";
    $body .= "Email: $emailnn";
    $body .= "Сообщение:n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo 'Ваше сообщение успешно отправлено.';
    } else {
        echo 'Ошибка при отправке сообщения. Пожалуйста, попробуйте позже.';
    }
}
?>
