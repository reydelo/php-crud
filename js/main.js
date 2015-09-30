function editPencil(id) {
  window.location.href='views/pencils/edit.php/'+id;
}

function deletePencil(id) {
  window.location.href='views/pencils/index.php?delete='+id;
}

function upVotePencil(id) {
  window.location.href='views/pencils/index.php?vote='+id;
}

// var app = angular.module("myApp", []);
//
// app.controller("PencilController", function($scope, $http) {
//   function getPencilsAng() {
//     $http.get("../../pencil.php").then(function(response) {
//       console.log(response.data);
//     })
//   }
//   // getPencilsAng();
//   $scope.pencils = "Pencils!";
// });
