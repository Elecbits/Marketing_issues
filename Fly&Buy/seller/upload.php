<?php

session_start();

include("../db.php");


if (!isset($_SESSION['email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}

else{



$c_email =  $_SESSION['email'];



 $name_query="SELECT * FROM accounts WHERE email='$c_email' ";

      $run_name_query = mysqli_query($con , $name_query);
      
      while ($row_name_pro = mysqli_fetch_array($run_name_query)) 
    {
        $customer_name = $row_name_pro['name'];
        $customer_desgn = $row_name_pro['desgn'];

     
         }



if (isset($_GET['file_name'])) {

  $filetoupload = $_GET['file_name'];

$base_loc = "../landing_zone/".$filetoupload;
$moved_loc = "../location1/".$filetoupload;


if (copy($base_loc,$moved_loc)) {
  unlink("../landing_zone/".$filetoupload);

$insert_data = "INSERT INTO file_info (filename, old_loc, new_loc, user, desgn) VALUES ('$filetoupload', '$base_loc' , '$moved_loc' , '$c_email' , '$customer_desgn') " ;


if (mysqli_query($con, $insert_data)) {
   echo "<script>alert('Data inserted')</script>";  
   echo "<script>window.open('index.php?transfer_files','_self')</script>";

}

else{
echo "Error: " . $insert_data . "<br>" . mysqli_error($con);
}


}
}










if (isset($_GET['file_name1'])) {

  $filetoupload = $_GET['file_name1'];


$base_loc = "../landing_zone/".$filetoupload;
$moved_loc = "../location2/".$filetoupload;


if (copy($base_loc,$moved_loc)) {
  unlink("../landing_zone/".$filetoupload);

$insert_data = "INSERT INTO file_info (filename, old_loc, new_loc, user, desgn) VALUES ('$filetoupload', '$base_loc' , '$moved_loc' , '$c_email' , '$customer_desgn') " ;


if (mysqli_query($con, $insert_data)) {
   echo "<script>alert('Data inserted')</script>";  
   echo "<script>window.open('index.php?transfer_files','_self')</script>";

}

else{
echo "Error: " . $insert_data . "<br>" . mysqli_error($con);
}


}



}












if (isset($_GET['file_name2'])) {

  $filetoupload = $_GET['file_name2'];


$base_loc = "../landing_zone/".$filetoupload;
$moved_loc = "../location3/".$filetoupload;


if (copy($base_loc,$moved_loc)) {
  unlink("../landing_zone/".$filetoupload);

$insert_data = "INSERT INTO file_info (filename, old_loc, new_loc, user, desgn) VALUES ('$filetoupload', '$base_loc' , '$moved_loc' , '$c_email' , '$customer_desgn') " ;


if (mysqli_query($con, $insert_data)) {
   echo "<script>alert('Data inserted')</script>";  
   echo "<script>window.open('index.php?transfer_files','_self')</script>";

}
else{
echo "Error: " . $insert_data . "<br>" . mysqli_error($con);
}

}



}





}

?>

