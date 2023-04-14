<?php 
require_once 'php_action/db_connect.php';

session_start();

if(isset($_SESSION['userId'])) {
	header('location:'.$store_url.'dashboard.php');		
}

$errors = array();

if($_POST) {		
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) || empty($password)) {
		if($username == "") {
			$errors[] = "Username is required.";
		} 

		if($password == "") {
			$errors[] = "Password is required.";
		}
	} else {
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$result = $connect->query($sql);

		if($result->num_rows == 1) {
			$password = md5($password);
			// exists
			$mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$mainResult = $connect->query($mainSql);

			if($mainResult->num_rows == 1) {
				$value = $mainResult->fetch_assoc();
				$user_id = $value['user_id'];

				$_SESSION['userId'] = $user_id;

				header('location:'.$store_url.'dashboard.php');	
			} else{
				
				$errors[] = "Incorrect username or password!";
			}
		} else {		
			$errors[] = "Username does not exist!";		
		} 
	} 
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Log in: Woostem</title>
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="image/x-icon" href="assests/images/woo-icon.ico" />
	  <link rel="stylesheet" href="custom/css/custom.css">	
		<script src="assests/jquery/jquery.min.js"></script>
	  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
	  <script src="assests/jquery-ui/jquery-ui.min.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
			<ol class="breadcrumb">
  				<li><a href="index.php"><i class="fas fa-home"></i> Home </a></li>
  				<li class="active"> Log in - Woostem </li>
			</ol>
		<div class="row vertical">
			<div class="col-md-5 col-md-offset-4 text-center">
			<style>
				.row{
				font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
				font-weight: bolder;
				background-color: #1E282C;
				color: gray;
				border-radius: 4px;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
				
     		 		}
   	 		</style>
				<h1>Sign in</h1>
				<style>
				h1,a{
					font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
					font-weight: bolder;
					color: gray;
				}
				</style>
				<div class="panel">
					<div class="panel-heading">
					</div>
					<div class="panel-body">
					<style>
						.panel{
							box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
							box-shadow: 2px 2px 30px rgba(167, 158, 245, 0.2);
							border-radius: 4px;
							background-color: transparent;
							color: gray;
						}
					</style>

						<div class="messages">
							<?php if($errors) {
								foreach ($errors as $key => $value) {
									echo '<div class="alert alert-warning" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									'.$value.'</div>';										
									}
								} ?>
								<script>
								var timeout = 3000; 

								$('.alert-warning').delay(timeout).fadeOut(300);
								</script>
						</div>

						<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
							<fieldset>
							  <div class="form-group has-feedback">
									  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" autocomplete="on" />
									  <span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
							
									  <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" autocomplete="on" />
									  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
								</div>								
								<div class="form-group">
									<div>
									  <button type="submit" class="btn btn-primary">LOGIN</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>









	
