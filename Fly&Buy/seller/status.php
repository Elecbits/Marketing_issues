<!DOCTYPE html>
<html>
<head>
  <title></title>

  <style type="text/css">
  .btn{
    font-size: 14px;
  }
</style>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>




<body>

<div  class="col-lg-12 ">



  <div class="container">



<?php

$c_email =  $_SESSION['email'];

 $name_query="SELECT * FROM accounts WHERE email='$c_email' ";

      $run_name_query = mysqli_query($con , $name_query);
      
    $row_name_pro = mysqli_fetch_array($run_name_query);
         $customer_name = $row_name_pro['name'];
        $customer_desgn = $row_name_pro['desgn'];

 

 if (isset($_GET['status_id'])) {

  $file_name = $_GET['status_id'];


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

$mem_com = "SELECT member,comment,status from status_info where name='$file_name' and comment IS NOT NULL ";

$run_mem_com = mysqli_query($con, $mem_com);

while ($row_mem_com = mysqli_fetch_array($run_mem_com))
{

$member_o = $row_mem_com['member'];
$comment_o = $row_mem_com['comment'];


?>

 <div style="padding: 20px 20px 20px 20px;">
    <?php echo $member_o; ?><br>
    <?php echo $comment_o; ?>
  </div>

<?php

}
$file_mems = "SELECT *  from status_info where name = '$file_name' and  member = '$customer_name' and status = 'Active'";

$run_mems = mysqli_query($con, $file_mems);

while ($row_mems = mysqli_fetch_array($run_mems))
{



$member = $row_mems['member'];
$priority = $row_mems['priority'];
$comment = $row_mems['comment'];
$status = $row_mems['status'];

 
  
?>

<div class="card-block" style="padding: 20px 20px 20px 20px;">
    <h4 class="card-title"><?php echo $member." Level ".$priority; ?></h4>

   

    <form method="post" action="">
      <div  >
         <textarea class="form-control" id="exampleTextarea" style="font-size: 14px;" rows="3" name="desc"><?php echo $comment; ?></textarea>
      </div>
<br>


<?php 

if ($priority==1) {

  ?>

   <button type="submit" name="forward" value="<?php echo $file_name; ?>" class="btn btn-primary">Send Forward</button>
  <?php
}

elseif ($priority == $max_priority) {
   ?>

   <button type="submit" name="backward"  value="<?php echo $file_name; ?>" class="btn btn-primary">Send Backward</button>

   <button type="submit" name="finished"  value="<?php echo $file_name; ?>" class="btn btn-primary">Finish</button>

  <?php
}



else{
?>
     <button type="submit" name="backward" value="<?php echo $file_name; ?>" class="btn btn-primary">Send Backward</button>

     <button type="submit" name="forward"  value="<?php echo $file_name; ?>" class="btn btn-primary">Send Forward</button>

</form>
<?php
}


?>
   
 </div>

<?php

}

?>
  


  </div>

<br> 













<?php 

if (isset($_POST['forward'])) {

     
  
$comment = $_POST['desc'];

$pri = $priority+1;

$add_comment = "UPDATE status_info set comment = '$comment', status = 'Commented' where name = '$file_name' and  member = '$customer_name' and status = 'Active'";

if (mysqli_query($con, $add_comment)) {
  
$change_status = "UPDATE status_info set status = 'Active' where name = '$file_name'  and priority='$pri'";

if (mysqli_query($con, $change_status)) {

   echo "<script>alert('Status Updated')</script>";  
   echo "<script>window.open('index.php?my_profile','_self')</script>";
}





}


}


if (isset($_POST['backward'])) {

    

  
$comment = $_POST['desc'];

$pri = $priority-1;

$add_comment = "UPDATE status_info set comment = '$comment', status = 'Sent Backward' where name = '$file_name' and  member = '$customer_name' and status = 'Active'";

if (mysqli_query($con, $add_comment)) {
  
$change_status = "UPDATE status_info set status = 'Active' where name = '$file_name'  and priority='$pri'";

if (mysqli_query($con, $change_status)) {

   echo "<script>alert('Status Updated')</script>";  
   echo "<script>window.open('index.php?my_profile','_self')</script>";
}




}

}





if (isset($_POST['finished'])) {

  
  
$comment = $_POST['desc'];

$pri = $priority-1;

$add_comment = "UPDATE status_info set comment = '$comment', status = 'Finished' where name = '$file_name' and  member = '$customer_name' and status = 'Active'";

if (mysqli_query($con, $add_comment)) {
  
 echo "<script>alert('Status Updated')</script>";  
   echo "<script>window.open('index.php?my_profile','_self')</script>";

  
}



}



}

?>


 
</div>


    </div>





</body>
</html>


