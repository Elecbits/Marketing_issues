<!DOCTYPE html>
<html>
<head>
  <title></title>

  <style type="text/css">
  .btn{
    font-size: 14px;
  }
</style>

</head>




<body>

<div  class="col-lg-12 ">


<br>

  <div class="container">








<br>







<?php

$c_email =  $_SESSION['email'];

 $name_query="SELECT * FROM accounts WHERE email='$c_email' ";

      $run_name_query = mysqli_query($con , $name_query);
      
    $row_name_pro = mysqli_fetch_array($run_name_query);
         $customer_name = $row_name_pro['name'];
        $customer_desgn = $row_name_pro['desgn'];

 


$file_data = "SELECT *  from status_info where member = '$customer_name' and status = 'Active'  group by name ;";

$run_pro = mysqli_query($con, $file_data);

while ($row_pro = mysqli_fetch_array($run_pro))
{


$file_name = $row_pro['name'];


$file_desc = "SELECT *  from file_info  where name = '$file_name' ;";

$run_desc = mysqli_query($con, $file_desc);

$row_desc = mysqli_fetch_array($run_desc);


$description = $row_desc['description'];

$max_p = "SELECT  max(priority) as max_priority from status_info where name='$file_name'  ";

$run_max_p = mysqli_query($con, $max_p);

$row_max_p = mysqli_fetch_array($run_max_p);

$max_priority = $row_max_p['max_priority'];


?>

<div class="card" >

  <div class="card-header">
    <?php echo $file_name; ?>
  </div>



 <div style="padding: 20px 20px 20px 20px;">
    <?php echo $description; ?>
  </div>


<?php



$file_mems = "SELECT *  from status_info where name = '$file_name' and  member = '$customer_name' and status = 'Active'";

$run_mems = mysqli_query($con, $file_mems);
$row_mems = mysqli_fetch_array($run_mems);



$member = $row_mems['member'];
$priority = $row_mems['priority'];
$comment = $row_mems['comment'];
$status = $row_mems['status'];

 
  
?>

<div class="card-block" style="padding: 20px 20px 20px 20px;">
    <h4 class="card-title"><?php echo $member." Level ".$priority; ?></h4>

     <a href="index.php?status_id=<?php echo $file_name ; ?>"  class="btn btn-primary">Add comment</a>


   
 </div>




  </div>

<br> 

<?php
}



?>






</div>


    </div>





</body>
</html>

