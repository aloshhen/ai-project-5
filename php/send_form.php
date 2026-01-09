<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $to = "info@automoyka.com";
  $subject = "Новое сообщение с сайта";
  $body = "Имя: $name\nEmail: $email\nСообщение: $message";

  if (mail($to, $subject, $body)) {
    echo "Сообщение отправлено!";
  } else {
    echo "Ошибка при отправке сообщения.";
  }
}
?>