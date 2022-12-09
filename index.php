<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET':
    include '../company/api/read.php';
    break;
  case 'PUT':
    include '../company/api/update.php';
    break;
  case 'POST':
    include '../company/api/create.php';
    break;
  case 'DELETE':
    include '../company/api/delete.php';
    break;
}


?>
