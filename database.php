<?php
$dsn = "mysql:host=localhost;dbname=pencil_table;port=8889";
$user = "root";
$password = "root";

try {
  $db = new PDO($dsn, $user, $password);
} catch (Exception $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}

// make model available
include 'models/PencilModel.php';
// create an instance
$pencilModel = new PencilModel($db);
// get the list of pencils
$pencilList = $pencilModel->getAllPencils();

?>
