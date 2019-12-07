<?php

function getUsers() {
    $DB = mysqli_connect("127.0.0.1", "root", "11111111", "website");

    if (!$DB) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        exit;
    }

    $dataUsers = $DB->query('SELECT username, age, email FROM users;');



    $users = $dataUsers->fetch_all(MYSQLI_ASSOC);

    //var_dump($users);


    mysqli_close($DB);

    return $users;
}

function addUser($data) {
    $DB = mysqli_connect("127.0.0.1", "root", "11111111", "website");

    if (!$DB) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        exit;
    }



    $sql = "INSERT INTO users ( username, email, `password`, phone, age) ";

    $sql .= "VALUES('{$data['name']}', '{$data['email']}', '{$data['password']}', '{$data['phone']}', '{$data['age']}');";

    $resultQuery = $DB->query($sql);


    //var_dump($resultQuery);


    mysqli_close($DB);

    return $resultQuery;
}


/*$user = [
    'username' => 'vasa11',
    'email' => 'vasa11@gmail.com',
    'password'=> 'aosifvnas',
    'phone' => '0332589951',
    'age' => 44
];*/

//addUser($user);
