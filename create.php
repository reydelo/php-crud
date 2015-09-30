<?php
include_once 'database.php';
if(isset($_POST['btn-save']))
{

  //variables for input data
  $brand = $_POST['brand'];
  $grade = $_POST['grade'];

  // sql query for inserting data into database
  $sql_query = "INSERT INTO pencils(brand,grade) VALUES('$brand', '$grade')";
  // sql query execution function
  if(mysql_query($sql_query)) {
    header("Location: http://localhost:8888/index.php");
    } else {
     ?>
     <script type="text/javascript">
     alert('error occured while updating data');
     </script>
     <?php
    }
}
?>
<!-- why did this make it work?! -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>PHPencil CRUD</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <h1 class="text-center">Nominate a Pencil</h1>
        <form method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Brand" name="brand" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Grade" name="grade" required>
          </div>
          <button type="submit" class="btn btn-warning btn-block" name="btn-save">Submit</button>
        </form>
      </div>
      <br>
      <a href="index.php"><button class="btn btn-warning">back to main page</button></a>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
