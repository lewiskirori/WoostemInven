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

				// set session
				$_SESSION['userId'] = $user_id;

				header('location:'.$store_url.'dashboard.php');	
			} else{
				
				$errors[] = "Incorrect username or password!";
			} // /else
		} else {		
			$errors[] = "Username does not exist!";		
		} // /else
	} // /else not empty username // password
	
} // /if $_POST
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login - Woostem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="icon" type="image/x-icon" href="assests/images/woo-icon.ico" />
	<script src="assests/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
    <script src="assests/jquery-ui/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
	<style>
	    body {
      background-image: url('https://cdn.pixabay.com/photo/2018/04/29/11/54/wood-3352328_960_720.jpg');
      background-size: cover;
      background-position: center;
      font-family: 'Open Sans', sans-serif;
    }
    
    .container {
      margin-top: 5%;
    }
    
    .breadcrumb {
      background-color: transparent;
      margin-bottom: 0;
      font-size: 16px;
    }

    .breadcrumb li {
      display: inline-block;
      margin-right: 5px;
      color: #525252;
    }

    .breadcrumb li a {
      color: #525252;
      text-decoration: none;
    }

    .breadcrumb li.active {
      color: #333;
    }
    
    .panel {
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      border-radius: 50px;
      background-color: #fff;
      padding: 30px;
    }
    
    .panel-title {
      font-weight: 600;
      color: #333;
      text-align: center;
      font-size: 28px;
    }
    
    .form-control {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      border: none;
      border-radius: 5px;
      color: #333;
      font-weight: 600;
      padding: 10px;
      font-size: 16px;
      outline: none;
      border: 2px solid #aaa;
    }
    
    .form-control:focus {
       outline: none;
       box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.5);
    }

    .form-group {
      margin-bottom: 30px;
    }
    
    label.control-label {
      font-size: 20px;
      color: #333;
      margin-right: 10px;
    }
    
    button.btn-primary {
      background-color: #525252;
      border: none;
      border-radius: 5px;
      font-weight: 600;
    }
    
    button.btn-primary:hover {
      background-color: #333;
    }
    
    @media only screen and (max-width: 767px) {
      .panel {
        padding: 20px;
      }
      
      .panel-title {
        font-size: 24px;
      }
    }
	</style>
  </head>
  <body>
    <div class="container">
        <ol class="breadcrumb">
      			<li><a href="index.php"><i class="fas fa-home"></i> Home </a></li>
      			<li class="active"><a href=""> Log In </a></li>
    	</ol>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Sign in</h3>
            </div>
            <div class="panel-body">
                <!-- Page loader -->
                 <div id="preloader">
                     <style>
                        #preloader {
                          position: fixed;
                          top: 0;
                          left: 0;
                          right: 0;
                          bottom: 0;
                          z-index: 9999;
                          overflow: hidden;
                          background: #fff;
                        }
                        
                        #preloader:before {
                          content: "";
                          position: fixed;
                          top: calc(50% - 30px);
                          left: calc(50% - 30px);
                          border: 6px solid #428bca;
                          border-top-color: #fff;
                          border-bottom-color: #fff;
                          border-radius: 50%;
                          width: 60px;
                          height: 60px;
                          animation: animate-preloader 1s linear infinite;
                        }
                        
                        @keyframes animate-preloader {
                          0% {
                            transform: rotate(0deg);
                          }
                        
                          100% {
                            transform: rotate(360deg);
                          }
                        }
                     </style>
                     
                     <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            const preloader = document.querySelector("#preloader");
                            if (preloader) {
                                preloader.classList.add("hide");
                                setTimeout(() => {
                                    preloader.remove();
                                }, 1000);
                            }
                        });
                    </script>
                 </div>
              <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="username"><i class="fas fa-user"></i></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="on" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="password"><i class="fas fa-lock"></i></label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="on" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>










	