<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
  .btn{
    font-size: 14px;
  }
</style>
<body>

<div  class="container">


<br>

<blockquote class="blockquote" style=" border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; font-size: 20px;  padding: 10px 10px 10px 10px;" >
  <p class="mb-0" >Add Offers</p>
</blockquote>


<div class="col-lg-12">
  <form method="post" action="">
        <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Offers</label>
      <div class="col-sm-10" >
        <input type="text" style="font-size: 14px;" class="form-control" id="inputEmail3" name="offer1" placeholder="offers">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Coins</label>
      <div class="col-sm-10" >
        <input type="number" style="font-size: 14px;" class="form-control" id="inputEmail3" name="coin1" placeholder="coins">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Values</label>
      <div class="col-sm-10" >
        <input type="number" style="font-size: 14px;" class="form-control" id="inputEmail3" name="value1" placeholder="coins">
      </div>
    </div>

 
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" name="add_offers" class="btn btn-primary">Add Offers</button>
      </div>
    </div>
  </form>
</div>     
   


<br>
<hr>



<div class="col-lg-12" >
 <blockquote class="blockquote" style=" border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; font-size: 20px;  padding: 10px 10px 10px 10px;" >
  <p class="mb-0" >Offer List</p>
</blockquote>



<table class="table ">
  <thead>
    <tr>
      
      <th>Offers</th>
      <th>Coins</th>
      <th>Values</th>

     <th>Delete</th>
     

   
    </tr>
  </thead>

  <tbody>










<?php

 $c_email =  $_SESSION['email'];


$emp_data = "SELECT *  from offers where email = '$c_email' ;";

$run_pro = mysqli_query($con, $emp_data);

while ($row_pro = mysqli_fetch_array($run_pro))
{



$offers = $row_pro['offer'];
$coins= $row_pro['coin'];
$id1 = $row_pro['id'];
$value = $row_pro['value'];
$email_id = $row_pro['email'];


$ids = "$email_id|$id1"


?>



    <tr>
     
      <td><?php echo $offers; ?></td>
      <td><?php echo $coins; ?></td>
      <td><?php echo $value; ?></td>

     <td><a href="delete_emp.php?delete_id=<?php echo $ids ; ?>"><button type="button" class="btn btn-primary">Delete</button></a></td>
          
     
    </tr>
   
 







<?php




}



?>




 </tbody>

</table>

</div>






  

    </div>





</body>
</html>


<?php

if (isset($_POST['add_offers'])) {
  
$off1 = $_POST['offer1'];
$co1 = $_POST['coin1'];
$va1 = $_POST['value1'];



$insert_emp = "INSERT INTO offers (offer, coin, email, value) VALUES ('$off1',  '$co1' , '$c_email', '$va1') " ;


if (mysqli_query($con, $insert_emp)) {
   echo "<script>alert('Offers added')</script>";  
   echo "<script>window.open('index.php?offers','_self')</script>";

}





}











?>