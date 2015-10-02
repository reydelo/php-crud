var app = angular.module('myApp', ['ngResource']);

app.factory('Pencils', ['$resource', function($resource) {
    return $resource('/pencil/:id', {id:'@id'}, {
      getAll: {method: 'GET', isArray: true},
      getOne: {method: 'GET', params: {id: '@id'}, isArray: false},
      postOne: {method: 'POST', isArray: false},
      editOne: {method: 'PUT', isArray: false},
      deleteOne: {method: 'DELETE', params: {id: '@id'}, isArray: false}
    });
}])

app.controller('PencilController', ['$scope', 'Pencils', function($scope, Pencils) {
  $scope.pencil = {};
  $scope.form = false;

  // populate table of pencils
  $scope.pencils = Pencils.getAll();

  $scope.postPencil = function(){
    var payload = $scope.pencil;
    console.log(payload);
    var pencil = Pencils.postOne({}, payload);
    console.log(pencil);
    $scope.pencil = {};
  };

  $scope.showForm = function() {
    $scope.form = true;
  }

  $scope.hideForm = function() {
    $scope.form = false;
  }

  $scope.editPencil = function(id) {
    $scope.showForm();
    var payload = $scope.pencil
  }

  $scope.deletePencil = function(Id) {
    console.log(Id);
    Pencils.deleteOne({id: Id});
    $scope.pencils = Pencils.getAll();
  }

  $scope.upVote = function(id) {
  }

}]);
