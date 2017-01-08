<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Men's Fashain</title>
	<!-- css link -->
	<link rel="stylesheet" type="text/css" href="assests/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="assests/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assests/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assests/css/style.css" />
        
	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="assests/css/font-awesome/css/font-awesome.min.css" />

	<!-- bootstrap link -->
	<link rel="stylesheet" type="text/css" href="assests/css/bootstrap/css/bootstrap.min.css" />

	<!-- google font link-->
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css' />

	<!-- jQuery link-->
	<script src="assests/js/jquery-1.12.2.js"></script>
	<script src="assests/js/isotope.pkgd.min.js"></script>
	<script src="assests/js/custom.js"></script>

</head>
<body>
<!-- header section starts -->
	<header class="header">
		<div class="container">
			<div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="showtest">
                    
                        <h2> Client example </h2>
                          <h3>Output: </h3>
                          <p>hye</p>
                          <div class="result">hello</div>
                          <script id="source" language="javascript" type="text/javascript">
                        
                          $(document).ready(function() {
                                $("p").click(function() {
                                    $.ajax({
                                          type: "Post",
                                          url: "accessoriesData.php",
                                          success: function(data) {
                                                var obj = $.parseJSON(data);      
                                                var result = "<ul>"
                                                $.each(obj, function() {
                                                    result = result + "<li>First Name : " + this['product_id'] + " , Last Name : " + this['category_id'] + "</li>";
                                                });
                                                result = result + "</ul>"
                                                $(".result").html(result);
                                          }
                                    }); 
                                });
                            });
                        
                          </script>
                    </div>
                </div>
            </div>
        </div>
   </header>
</body>