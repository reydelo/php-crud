<?php
$dsn = "mysql:host=localhost;dbname=pencil_table;port=8889";
$user = "root";
$password = "root";

try {
  $db = new PDO($dsn, $user, $password);
  //throws an exception when there's an error in the query
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //defines the character set
} catch (Exception $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}
?>
