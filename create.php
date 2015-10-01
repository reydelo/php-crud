<?php
include_once 'database.php';

// create condition
if(isset($_POST['btn-save'])) {
  //variables for input data
  $brand = $_POST['brand'];
  $grade = $_POST['grade'];

  // sql query for inserting data into database
  $sql_query = "INSERT INTO pencils(brand,grade) VALUES('$brand', '$grade')";
  $db->query($sql_query);
  header("Location: http://localhost:8888/index.php");
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

        <h1>Nominate a Pencil<a href="index.php" class="pull-right"><button class="btn btn-primary">Cancel</button></a></h1>

        <form method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Brand" name="brand">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Grade" name="grade">
          </div>
          <button type="submit" class="btn btn-warning pull-right" name="btn-save">Submit</button>
        </form>

      </div>
    </div>
  </div>
</body>
</html>
