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
  <p class="mb-0" >Apply Coupons</p>
</blockquote>


<div class="col-lg-12">
  <form method="post" action="">
        <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
      <div class="col-sm-10" >
        <input type="number" style="font-size: 14px;" class="form-control" id="inputEmail3" name="phone" placeholder="Phone Number">
      </div>
    </div>

           <div class="form-group row">
      <label for="inputPassword3"  class="col-sm-2 col-form-label">Offers</label>
   <div style="padding-left: 17px;">
     <select  name="sel_offer" required >




<?php

 $c_email =  $_SESSION['email'];


$emp_data = "SELECT *  from offers where email = '$c_email' ;";

$run_pro = mysqli_query($con, $emp_data);

while ($row_pro = mysqli_fetch_array($run_pro))
{



$offers = $row_pro['offer'];
$coins= $row_pro['coin'];
$id1 = $row_pro['id'];
$email_id = $row_pro['email'];


$ids = "$email_id|$coins"


?>



                      <option value="<?php echo $ids; ?>" selected="selected"><?php echo "$offers ($coins)"; ?></option>
  

  <?php




}



?>

                     
                    </select>
</div>
    </div>
 
 
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" name="add_offers" class="btn btn-primary">Apply Offer</button>
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
  
$off1 = $_POST['phone'];
$sel_offer = $_POST['sel_offer'];



$steps = explode("|", $sel_offer);




$coin_data = "SELECT *  from seller where email = '$c_email' ;";

$coin_pro = mysqli_query($con, $coin_data);
$row_coin_pro = mysqli_fetch_array($coin_pro);

$old_coins = $row_coin_pro['coins'];

$new_coins = $old_coins - $steps[1];




$insert_emp = "UPDATE seller set coins =  '$new_coins' where email = '$c_email' " ;


if (mysqli_query($con, $insert_emp)) {
   echo "<script>alert('Offers added')</script>";  
   echo "<script>window.open('index.php?cust','_self')</script>";

}





}











?>