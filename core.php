<?php 

session_start();

require_once 'db_connect.php';

// echo SESSION userId

if(!$_SESSION['userId']) {
	header('location:'.$store_url);	
} 

?>
