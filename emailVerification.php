<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Men's Fashain</title>
	<!-- css link -->
	<link rel="stylesheet" type="text/css" href="assests\css\reset.css" />
    <link rel="stylesheet" type="text/css" href="assests/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assests/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assests\css\style.css" />
        
	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="assests\css\font-awesome\css\font-awesome.min.css" />

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
<section class="emailVerification">
    <div class="row">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3"></div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="email-content">
                <?php
                    require_once 'include/classes/class.user.php';
                    $user = new USER;
                    
                    //if(empty($_GET['key']) && empty($_GET['code']))
                    //{
                    //	$user->redirect('index.php');
                    //}
                    echo $_GET['key'];
                    echo $_GET['code'];
                    
                    if(isset($_GET['key']) && isset($_GET['code']))
                    {
                    	$id = base64_decode($_GET['key']);
                    	$code = $_GET['code'];
                    	
                    	$statusY = 1;
                    	$statusN = 0;
                    	
                    	$stmt = $user->runQuery("SELECT user_id ,active FROM users WHERE user_id=:uID AND hash=:code LIMIT 1");
                    	$stmt->execute(array(":uID"=>$id,":code"=>$code));
                    	$row=$stmt->fetch(PDO::FETCH_ASSOC);
                    	if($stmt->rowCount() > 0)
                    	{
                    		if($row['active']==$statusN)
                    		{
                    			$stmt = $user->runQuery("UPDATE users SET active=:status WHERE user_id=:uID");
                    			$stmt->bindparam(":status",$statusY);
                    			$stmt->bindparam(":uID",$id);
                    			$stmt->execute();	
                    			
                    			echo "<h3><strong>WoW !</strong> Your Account is Now Activated. Now, <a href='login.php'>Login here</a><h3>";	
                    		}else{
                    			echo "<h3><strong>sorry !</strong>  Your Account is already Activated. You don't need to verify every times for login. <a href='login.php'>Login here</a></h3>";
                    		}
                    	}else{
                    		echo "<h3><strong>sorry !</strong>  No Account Found. Try creating a new account. <a href='register.php'>Register here</a></h3>";
                    	}	
                    }
                    
                ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3"></div>
        </div>
    </div>
</section>
</body>
</html>