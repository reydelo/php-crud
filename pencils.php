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

// get the list of pencils
$pencilList = $db->query('SELECT * FROM pencils');
header('Content-Type: application/json');
echo json_encode($pencilList->fetchAll(PDO::FETCH_ASSOC));

?>
