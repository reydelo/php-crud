<!DOCTYPE html>
<html lang="en" ng-app='myApp'>
<head>
  <meta charset="utf-8">
  <title>PHPencil CRUD</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

  <div class="container" ng-controller="PencilController">
    <div class="row">

      <div class="col-md-6 col-md-offset-3">
        <h2>Best Pencils<button class="btn btn-warning pull-right" ng-click="showForm()">Nominate a Pencil!</button></h2>
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
                <tr ng-repeat="pencil in pencils">
                  <th>{{ pencil.vote_count }} <span class="glyphicon glyphicon-thumbs-up text-warning"></span></th>
                  <td>{{ pencil.brand }}</td>
                  <td>{{ pencil.grade }}</td>
                  <td class="text-right">
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span></button>
                    <button ng-click="deletePencil(pencil.id)" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                  </td>
                </tr>
          </tbody>
        </table>
      </div>

      <div class="col-md-6 col-md-offset-3" ng-show="form">
        <h2>Nominate a Pencil<button class="btn btn-primary pull-right" ng-click="hideForm()">Cancel</button></h2>
        <form method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Brand" ng-model="pencil.brand" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pencil Grade" ng-model="pencil.grade" required>
          </div>
          <button ng-click=postPencil() class="btn btn-warning pull-right">Submit</button>
        </form>
      </div>

    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular-resource.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
