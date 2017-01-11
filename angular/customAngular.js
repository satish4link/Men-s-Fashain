// read products
$scope.getAll = function(){
    $http.get("productsData.php").success(function(response){
        $scope.names = response.records;
    });
}