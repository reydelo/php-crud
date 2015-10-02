<?php
// include here logic to handle different types of requests in different manners
require_once("../models/PencilModel.php");

$dsn = "mysql:host=localhost;dbname=pencil_table;port=8889";
$user = "root";
$password = "root";

$db = new PDO($dsn, $user, $password);
$obj = new PencilModel($db);

switch ($_SERVER['REQUEST_METHOD']) {

  case "GET":

    $id = explode("pencil/", $_SERVER['REQUEST_URI']);
    if ($id[1] != ""){
      // Query the database to get the information about the pencil with ID = $id[1]
      $result = $obj->get_pencil_by_id($id[1]);
    }
    else {
      // Query the database to get the information about all the pencils
      $result = $obj->get_pencils();
    }
    break;

  case "POST":

    // Save a new record in the database
    $result = $obj->register_new_pencil($_POST);
    break;

  case "PUT":

    // Retrieve additional data
    $result = $obj->loan_pencil($_POST, $id);
    break;

  case "DELETE":

    $id = explode("pencil/", $_SERVER['REQUEST_URI']);
    if (isset($id[1])){
      $result = $obj->delete_pencil($id[1]);
    }
    break;
}

$json = json_encode($result);
echo $json;

return;
 ?>
