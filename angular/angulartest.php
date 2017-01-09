<html ng-app="crudApp">
<head>
<title>AngularJS Directive Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Include main CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Include jQuery library -->
<script src="../assests/js/jquery-1.12.2.js"></script>
<!-- Include AngularJS library -->
<script src="angular/angular.min.js"></script>
<!-- Include Bootstrap Javascript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container wrapper" ng-controller="DbController">
<h1 class="text-center">AngularJS CRUD Operations Demo</h1>

<!-- Table to show employee detalis -->
<div class="table-responsive">
<table class="table table-hover">
<tr>
    <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product DESC</th>
                            <th>product Rate</th>
</tr>
<tr>

<td>{{detail.product_image}}</td>
                            <td>{{detail.product_name}}</td>
                            <td>{{detail.product_desc}}</td>
                            <td>{{detail.product_rate}}</td>
</tr>
</table>
</div>
</div>
<!-- Include controller -->
<script src="customAngular.js"></script>
</body>
</html>