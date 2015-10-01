<?php
include_once 'database.php';

// GET one condition
if(isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $sql_query="SELECT * FROM pencils WHERE id=".$id;
  $result_set=$db->query($sql_query);
  $row=$result_set->fetch(PDO::FETCH_ASSOC);
}

if(isset($_POST['btn-save'])) {
  // variables for input data
  $brand = $_POST['brand'];
  $grade = $_POST['grade'];

  // sql query for update data into database
  $sql_query = "UPDATE pencils SET brand='$brand',grade='$grade' WHERE id=".$id;
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
      <div class="col-md-6">

        <h1 class="text-center">Update Pencil<a href="index.php" class="pull-right"><button class="btn btn-primary">Cancel</button></a></h1>

        <form method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Brand" name="brand" value='<?php echo $row["brand"]; ?>'>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Grade" name="grade" value='<?php echo $row["grade"]; ?>'>
          </div>
          <button type="submit" class="btn btn-warning pull-right" name="btn-save">Submit</button>
        </form>

      </div>
    </div>
  </div>
</body>
</html>
