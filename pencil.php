<?php
$dsn = "mysql:host=localhost;dbname=pencil_table;port=8889";
$user = "root";
$password = "root";

$db = new PDO($dsn, $user, $password);

// make model available
include 'models/PencilModel.php';

// create an instance
$pencilModel = new PencilModel($db);

// get the list of pencils
$pencilList = $pencilModel->getAllPencils();

// show the view
include 'views/pencil-list.php';

?>
