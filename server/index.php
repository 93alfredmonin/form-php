<?php
$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//echo'<pre>';
//var_dump($metod);

//echo'</pre>';
//die;
if ($method === 'GET'){
    include './views/header.php';

    if ($route === '/') {
        include './views/home.php';
    }

    if ($route === '/contacts') {
        include './views/contacts.php';
    }

    if ($route === '/login' ) {
        include './views/login.php';
    } 

    include './views/footer.php';
}   

if($method === 'POST'){

    if ($route === '/login') {
      $request = json_decode( file_get_contents('php://input'), true);
      
      valid($request);
       // echo 'hello';
    }
}

function valid ($data){
$errors = [];

    if(!preg_match('/^[а-яa-z0-9\-_\.]{2,25}$/i', $data['name'])){
        $subscribe ['name'] = 'name is not valid';
    }

    if(!preg_match('/^[0-9a-z.\-_]{1,15}@[0-9a-z.\-_]{1,14}\.[a-z]{1,10}$/i', $data['email'])){
        $subscribe ['email'] = 'email is not valid';
    }

    if(!preg_match('/^(\+380|380|80|0){1,4}[0-9]{9}$/', $data['phone'])){
        $subscribe ['phone'] = 'phone is not valid';
    }

    if(!preg_match('/^[а-яa-z0-9\-_\.]{2,25}$/i', $data['password'])){
        $subscribe ['password'] = 'password is not valid';
    }

    //var_dump($data);

    if(!(gettype($data['subscribe']) === 'boolean')){
        $subscribe ['subscribe'] = 'subscribe is not valid';
    }

    if($errors){
        return $errors;
    }
    return true;
}