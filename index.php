<?php
include_once 'database.php';

// delete condition
if(isset($_GET['delete'])) {
  $sql_query = "DELETE FROM pencils WHERE id=".$_GET['delete'];
  mysql_query($sql_query);
  header("Location: $_SERVER[PHP_SELF]");
}

if(isset($_GET['vote'])) {
  $sql_query = "UPDATE pencils SET vote_count=vote_count + 1 WHERE id=".$_GET['vote'];
  mysql_query($sql_query);
  header("Location: $_SERVER[PHP_SELF]");
}
?>

<!DOCTYPE html>
<html lang="en" ng-app=''>
<head>
  <meta charset="utf-8">
  <title>PHPencil CRUD</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

  <div class="container">
    <div class="row">

      <a href="create.php"><button class="btn btn-warning">Nominate a Pencil!</button></a>

      <div class="col-md-6">
        <h2>Best Pencils</h2>
        <table class="table">
          <thead>
            <tr>
              <th colspan="1"></th>
              <th>Brand</th>
              <th>Grade</th>
              <th colspan="1"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $results = $db->query("SELECT * FROM pencils ORDER BY vote_count DESC");
            // print_r($results->fetchAll(PDO::FETCH_ASSOC));
            foreach ($results as $pencil) {
              ?>
              <tr>
                <th><?php echo $pencil["vote_count"]; ?> <a href="javascript:upVotePencil('<?php echo $pencil["id"]; ?>')"> <span class="glyphicon glyphicon-thumbs-up text-warning"></span></a></th>
                <td><?php echo $pencil["brand"]; ?></td>
                <td><?php echo $pencil["grade"]; ?></td>
                <td class="text-right">
                  <a href="javascript:editPencil('<?php echo $pencil["id"]; ?>')"><button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span></button></a>
                  <a href="javascript:deletePencil('<?php echo $pencil["id"]; ?>')"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
