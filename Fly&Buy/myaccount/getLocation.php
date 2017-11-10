<?php
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //Send request and receive json data by latitude and longitude
include("../db.php");

session_start();

$lat = $_POST['latitude'];
$long = $_POST['longitude'];

$loc = "$lat,$long|";


 $c_email =  $_SESSION['email'];

      global $con;

$update_status = "UPDATE accounts set location='$loc' WHERE email='$c_email'  " ;


if (mysqli_query($con, $update_status)){



 echo "<script>alert('Location Added')</script>";  
 


}










    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    if($status=="OK"){
        //Get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
    // dipslay address
    echo $location;
}
?> 