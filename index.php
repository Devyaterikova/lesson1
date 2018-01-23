<?php
$name= "Лена";
$age = 33;
$email = 'A1978D@yandex.ru';
$address = 'Североморск';
$about = 'Инженер';
?>
<html>
<head>
    <title>Страница пользователя</title>
</head>
<body>
  <div>
    <h2> Страница пользователя Лена </h2>
    <p> <strong>Имя :</strong> <?= $name ?> </p>
    <p> <strong>Возраст :</strong> <?= $age ?> </p>
    <p> <strong>Адрес электронной почты :</strong> <?= $email ?> </p>
    <p> <strong>Город :</strong> <?= $address ?> </p>
    <p> <strong>О себе :</strong> <?= $about ?> </p>
  </div>
</body>
</html>
