function editPencil(id) {
  window.location.href='update.php?edit='+id;
}

function deletePencil(id) {
  window.location.href='index.php?delete='+id;
}

function upVotePencil(id) {
  window.location.href='index.php?vote='+id;
}

var app = angular.module('myApp', []);

app.controller('PencilController', function($scope, $http) {
  $scope.pencil = {};
  $scope.form = false;
  $scope.table = true;

  function getPencils() {
    $http.get('../pencils.php').then(function(results) {
      $scope.pencils = results.data;
    });
  };

  getPencils();

  $scope.postPencil = function(){
    var payload = $scope.pencil;
    $http.post('../pencils.php', payload).then(function(results) {
      console.log(results);
    });
    $scope.pencil = {};
  };

  $scope.showForm = function() {
    $scope.form = true;
    $scope.table = false;
  }

  $scope.hideForm = function() {
    $scope.form = false;
    $scope.table = true;
  }

  $scope.editPencil = function(id) {
    $scope.showForm();
    var payload = $scope.pencil
    $http.put('../pencils/' + id, payload).then(function(results) {
      $scope.pencil = {};
      $scope.hideForm();
      getPencils();
    })
  }

  $scope.deletePencil = function(id) {
    $http.delete('../pencils' + id).then(function(results) {
      getPencils();
    })

  }

  $scope.upVote = function(id) {

  }
  
});
