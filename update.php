<?php
include_once 'database.php';
if(isset($_GET['edit'])) {
 $sql_query="SELECT * FROM pencils WHERE id=".$_GET['edit'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}

if(isset($_POST['btn-save'])) {
 // variables for input data
 $brand = $_POST['brand'];
 $grade = $_POST['grade'];

 // sql query for update data into database
 $sql_query = "UPDATE pencils SET brand='$brand',grade='$grade' WHERE id=".$_GET['edit'];

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PHPencil CRUD</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>

  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <h1 class="text-center">Update Pencil<a href="index.php" class="pull-right"><button class="btn btn-primary">Cancel</button></a></h1>
        <form method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Brand" name="brand" value=<?php echo $fetched_row["brand"]; ?>>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Grade" name="grade" value=<?php echo $fetched_row["grade"]; ?>>
          </div>
          <div class="pull-right">
          <button type="submit" class="btn btn-warning" name="btn-save">Submit</button>
          </div>
        </form>
      </div>

    </div>
  </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
  </body>
</html>
