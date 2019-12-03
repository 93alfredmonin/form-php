<?php

$link = mysqli_connect("127.0.0.1", "root", "11111111", "website");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    exit;
}

$users = $link->query('SELECT username, age FROM users where age > 50;');

var_dump($users);

mysqli_close($link);

