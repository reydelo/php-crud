<?php
include_once '../../pencil.php';
if(isset($_GET['edit'])) {
  getOnePencil($_GET['edit']);
 $sql_query="SELECT * FROM pencils WHERE id=".$_GET['edit'];
 var_dump($sql_query);
 // $result_set=mysql_query($sql_query);
 // $fetched_row=mysql_fetch_array($result_set);
}

if(isset($_POST['btn-save'])) {
 // variables for input data
 $brand = $_POST['brand'];
 $grade = $_POST['grade'];

 // sql query for update data into database
 $sql_query = "UPDATE pencils SET brand='$brand',grade='$grade' WHERE id=".$_GET['edit'];

 // sql query execution function
 if(mysql_query($sql_query)) {
    ?>
    <script type="text/javascript">
    alert('Pencil Updated Successfully');
    window.location.href='pencils/index.php';
    </script>
    <?php
   } else {
    ?>
    <script type="text/javascript">
    alert('error occured while updating data');
    </script>
    <?php
   }
 }
 ?>

  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <h1 class="text-center">Update Pencil</h1>
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
      <a href="pencil-list.php"><button class="btn btn-warning">back to main page</button></a>

    </div>
  </div>
