<html ng-app="crudApp">
<head>
<title>AngularJS Directive Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Include jQuery library -->
<script src="../assests/js/jquery-1.12.2.js"></script>
<!-- Include AngularJS library -->
<script src="angular.min.js"></script>
<!-- Include custom Javascript -->
<script src="customAngular.js"></script>
</head>
<body ng-controller ="projectsController">
        <h1 class="text-center">AngularJS mysql data displaying</h1>
        
        <!-- Table to show product detalis -->
        <div class="table-responsive">
            <table ng-controller="projectsController">
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product DESC</th>
                    <th>product Rate</th>
                </tr>
                <tr ng-repeat="project in projects">
                    <td>{{project.product_image}}</td>
                    <td>{{project.product_name}}</td>
                    <td>{{project.product_desc}}</td>
                    <td>{{project.product_rate}}</td>
                </tr>
            </table>
        </div>
</body>
</html>