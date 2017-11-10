<?php


session_start();

include("../db.php");


if (!isset($_SESSION['email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}

else{










if (isset($_GET['delete_id'])) {
	
	$delete_id = $_GET['delete_id'];

	$delete_cat=" DELETE FROM accounts WHERE email= '$delete_id'";

	$run_delete = mysqli_query(  $con  , $delete_cat );

	if ($run_delete) {
		
		echo "<script>alert('Employee has been deleted !')</script>";
		echo "<script>window.open('index.php?add_employees','_self')</script>";
	}
}














}

?>