<?php


session_start();

include("../db.php");


if (!isset($_SESSION['email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}

else{










if (isset($_GET['delete_id'])) {
	
	$delete_id = $_GET['delete_id'];

	$steps = explode("|", $delete_id);



	$delete_cat=" DELETE FROM offers WHERE email= '$steps[0]' and  id = '$steps[1]'";



	$drop_table = " ALTER TABLE offers DROP id ";

    $add_table =  "ALTER TABLE offers ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ";


	$run_delete = mysqli_query($con, $delete_cat);

	$run_drop = mysqli_query($con, $drop_table);
    $run_add_table = mysqli_query($con, $add_table);

	 if (($run_delete)&&($run_drop)&&($run_add_table)) {
		
		echo "<script>alert('Offer has been deleted !')</script>";
		echo "<script>window.open('index.php?offers','_self')</script>";
	}
}

}















?>