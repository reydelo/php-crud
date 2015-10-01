<?php
include_once 'database.php';

// delete condition
if(isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $db->query('DELETE FROM pencils WHERE id='.$id);
  header("Location: $_SERVER[PHP_SELF]");
}

// upvote condition
if(isset($_GET['vote'])) {
  $id = $_GET['vote'];
  $db->query("UPDATE pencils SET vote_count=vote_count + 1 WHERE id=".$id);
  header("Location: $_SERVER[PHP_SELF]");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHPencil CRUD</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">

        <h2>Best Pencils<a href="create.php"><button class="btn btn-warning pull-right">Nominate a Pencil!</button></a></h2>

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
            <?php foreach ($pencilList as $row): ?>
              <tr>
                <th><?php echo $row["vote_count"]; ?> <a href="http://localhost:8888/index.php?vote=<?php echo $row["id"]; ?>"> <span class="glyphicon glyphicon-thumbs-up text-warning"></span></a></th>
                <td><?php echo $row["brand"]; ?></td>
                <td><?php echo $row["grade"]; ?></td>
                <td class="text-right">
                  <a href="http://localhost:8888/update.php?edit=<?php echo $row["id"]; ?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span></button></a>
                  <a href="http://localhost:8888/index.php?delete=<?php echo $row["id"]; ?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</body>
</html>
