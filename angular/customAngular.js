
var app = angular.module('rjtApp', []);
app.controller('projectsController', function($scope, $http){
   getProject();
   function getProject(){
        $http.post("productsData.php").success(function(data){
            $scope.projects = data;
        });
   } 
});