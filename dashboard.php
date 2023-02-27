<?php require_once 'includes/header.php';

$sql = "SELECT * FROM product WHERE status = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;

$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;

$totalRevenue = "";
while ($orderResult = $orderQuery->fetch_assoc()) {
	$totalRevenue = $orderResult['paid'];
}

$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$userwisesql = "SELECT users.username , SUM(orders.grand_total) as totalorder FROM orders INNER JOIN users ON orders.user_id = users.user_id WHERE orders.order_status = 1 GROUP BY orders.user_id";
$userwiseQuery = $connect->query($userwisesql);
$userwieseOrder = $userwiseQuery->num_rows;

$connect->close();

?>

<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
</style>

<!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.print.css" media="print">

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" integrity="sha384-P7VH0zmjK7Vu1lK2e9Vn8WgOzHiMIgwYfQjnXM8xWx1zaxvOMJGlebzjh13tWGZ" crossorigin="anonymous">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js" integrity="sha384-R9XN826ZWSWlHva1uKJjK0A8f0FG+HvOJmBhPkK9UJMi6UZptKw97T6Tguc6LnJ" crossorigin="anonymous"></script>
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>
  <?php
    
    if(isset($_SESSION['userId']) && $_SESSION['userId']==1 && !isset($_SESSION['toastShown'])) {
      echo '<script type="text/javascript">';
      echo 'toastr.options = {
           "closeButton": true,
           "progressBar": false,
           "positionClass": "toast-top-right",
           "showDuration": "300",
           "hideDuration": "1000",
           "timeOut": "5000",
           "extendedTimeOut": "1000",
           "onShown": function () {
                $(".toast-success > .toast-header > .toast-icon").addClass("rounded-circle");
           }
        };
        toastr.success("Login was successful!");';
      echo '</script>';
      $_SESSION['toastShown'] = true;
    }
    ?>

<div class="row">
	<?php  if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
	<div class="col-md-4">
		<div class="panel panel-success">

			<div class="panel-heading">
				
				<a href="product.php" style="text-decoration:none;color:black;">
					Total Product
					<span class="badge pull pull-right"><?php echo $countProduct; ?></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
	
	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<a href="product.php" style="text-decoration:none;color:black;">
					Low Stock
					<span class="badge pull pull-right"><?php echo $countLowStock; ?></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
	
	<?php } ?>  
		<div class="col-md-4">
			<div class="panel panel-info">
			<div class="panel-heading">
				<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
					Total Orders
					<span class="badge pull pull-right"><?php echo $countOrder; ?></span>
				</a>
					
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
		</div> <!--/col-md-4-->

	
	<div class="col-md-4">
		<div class="card">
		  <div class="cardHeader">
		      <style>
                  .cardHeader{
                    font-family: 'Georgia';
                    font-weight: bolder;
                  }
            </style>
		    <h1><?php  /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    date_default_timezone_set('Africa/Nairobi');
    
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "Good Morning";
    } else
    /* If the time is greater than or equal to 1200 hours, but less than 1600 hours, so good afternoon */
    if ($time >= "12" && $time < "16") {
        echo "Good Afternoon";
    } else
    /* Should the time be between or equal to 1600 and 2000 hours, show good evening */
    if ($time >= "16" && $time < "20") {
        echo "Good Evening";
    } else
    /* Finally, show good night if the time is greater than or equal to 2000 hours */
    if ($time >= "20") {
        echo "Shouldn't you be in bed?.<br>Good Night";
    }
    ?><br></span></a></h1>
		  </div>
		 
		  <div class="cardContainer">
		      <style>
                  .cardContainer{
                    font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                  }
            </style>
    		    <p><?php date_default_timezone_set('Africa/Nairobi'); echo date('H:i') ?> <?php echo date('D') .', '.date('M').' '.date('d.'); ?></p>
			<p><?php echo date('Y') ?></p>
		  </div>
		</div> 
		<br/>

		<div class="card">
		  <div class="cardHeader" style="background-color:#245580;">
		    <h1><?php if($totalRevenue) {
		    	echo $totalRevenue;
		    	} else {
		    		echo '0';
		    		} ?></h1>
		  </div>

		  <div class="cardContainer">
		    <p> INR Total Revenue (KSHS)</p>
		  </div>
		</div> 
 
	</div>
	
	<?php  if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> User Wise Order</div>
			<div class="panel-body">
				<table class="table" id="productTable">
			  	<thead>
			  		<tr>			  			
			  			<th style="width:40%;">Name</th>
			  			<th style="width:20%;">Orders in Kshs</th>
			  		</tr>
			  	</thead>
			  	<tbody>
					<?php while ($orderResult = $userwiseQuery->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $orderResult['username']?></td>
							<td><?php echo $orderResult['totalorder']?></td>
							
						</tr>
						
					<?php } ?>
				</tbody>
				</table>
				<!--<div id="calendar"></div>-->
			</div>	
		</div>
		
	</div> 
	<?php  } ?>
	
</div> <!--/row-->

<!-- fullCalendar 2.2.5 -->
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.min.js"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
	$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: '',
          center: 'title'
        },
        buttonText: {
          today: 'today',
          month: 'month'          
        }        
      });


    });
    
</script>

<?php require_once 'includes/footer.php'; ?>