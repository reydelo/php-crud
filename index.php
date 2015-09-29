<?php
include_once 'database.php';
// if(isset($_POST['btn-save']))
// {
//
//  //variables for input data
//  $brand = $_POST['brand'];
//  $grade = $_POST['grade'];
//
//  // sql query for inserting data into database
//  $sql_query = "INSERT INTO pencils(brand,grade) VALUES('$brand', '$grade')";
//  mysql_query($sql_query);
//
// }

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
      $sql_query="SELECT * FROM pencils";
      $result_set=mysql_query($sql_query);
      while($row = mysql_fetch_array($result_set))
      {
          ?>
          <tr>
            <th><span class="pull-right glyphicon glyphicon-star text-warning"><?php echo $row[2]; ?></span></th>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td class="text-right">
              <button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span></button>
              <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
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
