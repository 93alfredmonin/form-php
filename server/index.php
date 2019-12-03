<?php
include './handers/validate.php';
include './handers/mysqliConnect.php';
$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];



include './handers/routeMetodGet.php';

include './handers/roteMethodPost.php';




