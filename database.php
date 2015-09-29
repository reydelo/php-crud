<?php

// $dsn = "mysql:host=localhost;dbname=pencil_table;port=8889";
// $user = "root";
// $password = "root";

// try {
//   $db = new PDO($dsn, $user, $password);
//   //throws an exception when there's an error in the query
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   //defines the character set
//   $db->exec("SET NAMES 'utf8'");
// } catch (Exception $e) {
//   echo 'Connection failed: ' . $e->getMessage();
//   exit;
// }
//
// try {
//   $results = $db->query("SELECT * FROM pencils ORDER BY vote_count ASC");
// } catch (Exception $e) {
//   echo "Data could not be retrieved from the database";
// }
//
// echo '<pre>';
// var_dump($results->fetchAll(PDO::FETCH_ASSOC)); //pdo statement object

$host = "localhost";
$user = "root";
$password = "root";
$database = "pencil_table";

mysql_connect($host,$user,$password);
mysql_select_db($database);

?>
