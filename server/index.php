<?php
session_start();

include './handers/dump.php';




include './handers/mysqli.php';
include './handers/validate.php';

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];



include './handers/routeMetodGet.php';

include './handers/roteMethodPost.php';




