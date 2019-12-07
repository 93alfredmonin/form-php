<?php
include './handers/mysqliConnect.php';
include './handers/validate.php';
$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];



include './handers/routeMetodGet.php';

include './handers/roteMethodPost.php';




