<!DOCTYPE html>
<?php

session_start();
include("db.php");

if (isset($_SESSION['email'])) {
  
echo "<script>alert('You have already logged in successfully')</script>";  
echo "<script>window.open('index.php','_self')</script>";

}

else{


?>


<html>
<head>
  <title>Fly & Buy</title>

   <meta name="viewport" content="width=device-width, initial-scale=1" /> 


  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

   <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">



  </style>
</head>
<body>

<!--Google Font - Work Sans-->



<div class="container" >
<br>
<span style="font-size: 30px; text-align:right ; padding-left: 70px; color: black; font-family: 'Baloo Tammudu', cursive;  ">Pay Cash, Get Coins
</span> 

<br>
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="elearn.png" alt="Avatar" /> 
    </button>




     <form method="post" action="" >
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text"  name="email1" id="fieldUser" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Email</label>
        </div>
        <div class="field">
          <input type="password" name="pass" id="fieldPassword" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
          <button class="btn"  type="submit" name="login">Login</button>
        </div>

        

      </div>

     </div>

     </form>
  </div>
  
</div>


 <script>
   document.getElementById('toggleProfile').addEventListener('click', function () {
  [].map.call(document.querySelectorAll('.profile'), function(el) {
    el.classList.toggle('profile--open');
  });
});
 </script>

</body>
</html>

<?php
if (isset($_POST['login'])) {
  

  $c_email = $_POST['email1'];
  $c_pass = $_POST['pass'];

  $sel_c="SELECT * FROM seller WHERE  email = '$c_email' AND pass = '$c_pass' ";

  $run_c = mysqli_query($con , $sel_c);

  $check_customer = mysqli_num_rows($run_c);

  if ($check_customer == 0) {
    
    echo "<script>alert('Password or email is incorrect !')</script>";
    exit();
  }




if ($check_customer > 0 )  {
  
   $_SESSION['email']= $c_email;

echo "<script>alert('You logged in successfully')</script>";
echo "<script>window.open('seller/index.php','_self')</script>";
}


}



}
?>




 






