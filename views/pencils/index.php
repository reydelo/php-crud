<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHPencil CRUD</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/main.css">
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
            <?php foreach ($pencilList as $row): ?>
                <tr>
                  <th><?php echo $row['vote_count']; ?> <a href="javascript:upVotePencil('<?php echo $row["id"]; ?>')"> <span class="glyphicon glyphicon-thumbs-up text-warning"></span></a></th>
                  <td><?php echo $row["brand"]; ?></td>
                  <td><?php echo $row["grade"]; ?></td>
                  <td class="text-right">
                    <a href="javascript:editPencil('<?php echo $row["id"]; ?>')"><button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span></button></a>
                    <a href="javascript:deletePencil('<?php echo $row["id"]; ?>')"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
                  </td>
                </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
  <script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>
