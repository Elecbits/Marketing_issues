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
  <p class="mb-0" >Total Coins =


<?php

$coin_data_old = "SELECT *  from seller where email = '$c_email' ;";

$coin_pro_old = mysqli_query($con, $coin_data_old);
$row_coin_pro_old = mysqli_fetch_array($coin_pro_old);

$old_coins_old = $row_coin_pro_old['coins'];
$old_sales_old = $row_coin_pro_old['sales'];


echo "$old_coins_old";

?>






<?php echo ", Total Sales = $old_sales_old"; ?>



  </p>
</blockquote>


<div class="col-lg-12">
  <form method="post" action="">
        <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Number of coins</label>
      <div class="col-sm-10" >
        <input type="number" style="font-size: 14px;" class="form-control" id="inputEmail3" name="phone" placeholder="Coins">
      </div>
    </div>

 
 
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" name="add_offers" class="btn btn-primary">Add Coins</button>
      </div>
    </div>
  </form>
</div>     
   


<br>
<hr>










  

    </div>





</body>
</html>


<?php

if (isset($_POST['add_offers'])) {
  
$coin1 = $_POST['phone'];









$coin_data = "SELECT *  from seller where email = '$c_email' ;";

$coin_pro = mysqli_query($con, $coin_data);
$row_coin_pro = mysqli_fetch_array($coin_pro);

$old_coins = $row_coin_pro['coins'];
$old_sales = $row_coin_pro['sales'];


$new_coins = $old_coins + $coin1;

$new_sales = $old_sales + (5*$coin1);




$insert_emp = "UPDATE seller set coins =  '$new_coins', sales = '$new_sales' where email = '$c_email' " ;


if (mysqli_query($con, $insert_emp)) {
   echo "<script>alert('Offers added')</script>";  
   echo "<script>window.open('index.php?coins','_self')</script>";

}





}











?>