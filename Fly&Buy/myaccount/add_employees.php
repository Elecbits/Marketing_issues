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
  <p class="mb-0" >Add Members</p>
</blockquote>


<div class="col-lg-12">
  <form method="post" action="">
        <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10" >
        <input type="text" style="font-size: 14px;" class="form-control" id="inputEmail3" name="emp_name" placeholder="Name">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10" >
        <input type="email" style="font-size: 14px;" class="form-control" id="inputEmail3" name="emp_email" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3"  class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="text" style="font-size: 14px;" class="form-control" id="inputPassword3" name="emp_pass" placeholder="Password">
      </div>
    </div>
       <div class="form-group row">
      <label for="inputPassword3"  class="col-sm-2 col-form-label">Designation</label>
      <div class="col-sm-10">
        <input type="text" style="font-size: 14px;" class="form-control" id="inputPassword3" name="emp_desgn" value="Member" disabled>
      </div>
    </div>

 
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" name="add_emp" class="btn btn-primary">Add Members</button>
      </div>
    </div>
  </form>
</div>     
   


<br>
<hr>



<div class="col-lg-12" >
 <blockquote class="blockquote" style=" border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; font-size: 20px;  padding: 10px 10px 10px 10px;" >
  <p class="mb-0" >Members List</p>
</blockquote>



<table class="table ">
  <thead>
    <tr>
      
      <th>Name</th>
      <th>Email</th>
      <th>Designation</th>
      <th>Delete</th>
     

   
    </tr>
  </thead>

  <tbody>










<?php


$emp_data = "SELECT *  from accounts where desgn = 'Employee' ;";

$run_pro = mysqli_query($con, $emp_data);

while ($row_pro = mysqli_fetch_array($run_pro))
{



$name_given = $row_pro['name'];
$email_id = $row_pro['email'];
$desgn_given = $row_pro['desgn'];


    if ($desgn_given == 'Employee') {
      $desgn_given = 'Member';
    }



?>



    <tr>
     
      <td><?php echo $name_given; ?></td>
      <td><?php echo $email_id; ?></td>
      <td><?php echo $desgn_given; ?></td>
      <td><a href="delete_emp.php?delete_id=<?php echo $email_id ; ?>"><button type="button" class="btn btn-primary">Delete</button></a></td>
          
     
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

if (isset($_POST['add_emp'])) {
  
$name = $_POST['emp_name'];
$email_id = $_POST['emp_email'];
$pass = $_POST['emp_pass'];
$desgn = "Employee";


$emp_count = "SELECT * from accounts where email = '$email_id'";
$row_count = mysqli_query($con, $emp_count);

$count_upsert_query = mysqli_num_rows($row_count);

if ($count_upsert_query == 0)
{

$insert_emp = "INSERT INTO accounts (email, pass, desgn, name) VALUES ('$email_id',  '$pass' , '$desgn', '$name') " ;


if (mysqli_query($con, $insert_emp)) {
   echo "<script>alert('Members Added')</script>";  
   echo "<script>window.open('index.php?add_Members','_self')</script>";

}





}



else
{

  echo "<script>alert('Members Already exist')</script>";  
   echo "<script>window.open('index.php?add_Members','_self')</script>";

}





}






?>