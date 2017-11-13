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
  <p class="mb-0" >Add hoarding



  </p>
</blockquote>


<div class="col-lg-12">
  <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Insert Pic</label>
      <div class="col-sm-10" >
        <input type="file" style="font-size: 14px;" class="form-control" id="inputEmail3" name="uploadedfile">
      </div>
    </div>

 
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <input  type="submit" value="submit" ></input>
      </div>
    </div>
  </form>
  <?php
   if(isset($_FILES['uploadedfile'])){ 

    error_reporting(E_ERROR | E_PARSE);
      $errors= array();
      $file_name = $_FILES['uploadedfile']['name'];
      $file_size =$_FILES['uploadedfile']['size'];
      $file_tmp =$_FILES['uploadedfile']['tmp_name'];
      $file_type=$_FILES['uploadedfile']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['uploadedfile']['name'])));
      
       

      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";

      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"img/$file_name");
         echo "Success";
      }else{
         print_r($errors);
      }
   




        
   // $insert_product = "INSERT INTO products (product_image ) VALUES ('$file_tmp')  ";

  $insert_product = "UPDATE seller SET hoarding= '$file_name' WHERE email = '$c_email'  ";


   $run_insert_product = mysqli_query($con, $insert_product);
 

  
if ($run_insert_product) {
   

    echo "<script>alert('Images has been added')</script>";
} else {
    echo "Error: " . $insert_product .  "<br>" . mysqli_error($con);

   }





}


?>
</div>     
   


<br>
<hr>











  

    </div>





</body>
</html>

