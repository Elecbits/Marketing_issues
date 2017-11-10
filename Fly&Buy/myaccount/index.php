<!doctype html>
<?php

session_start();

include("../db.php");


if (!isset($_SESSION['email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}
 
else{


?>


<html>
<head>
 <link rel="stylesheet" type="text/css" href="../../styles/alp/css/default.css" />
    <link rel="stylesheet" type="text/css" href="../../styles/alp/css/component.css" />
    <script src="styles/alp/js/modernizr.custom.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FTS - Dashboard</title>
  <link href="https://cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.muicss.com/mui-latest/js/mui.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<?php
 $c_email =  $_SESSION['email'];

      global $con;



      $name_query="SELECT * FROM accounts WHERE email='$c_email' ";

      $run_name_query = mysqli_query($con , $name_query);
      
      while ($row_name_pro = mysqli_fetch_array($run_name_query)) 
    {
        $customer_name = $row_name_pro['name'];
        $customer_desgn = $row_name_pro['desgn'];


     
          }

?>
        
  <style>
    .elec-logo{
      max-width: 154px;
    }
  </style>
</head>
<body style="font-size: 16px;">
  <div id="sidedrawer" class="border-r mui--no-user-select">
    <div id="sidedrawer-brand" class="mui--appbar-line-height">
      <!-- <span class="mui--text-title">Brand.io</span> -->
      <a href="../index.php"><img class="elec-logo" src="logo.png"></a>
    </div>
    <div class="mui-divider"></div>
      <ul >

<?php  if( $customer_desgn == 'Senior Supervisor' ) {
  # code...
?>
      <li>
      <a href="index.php?create_file" style="text-decoration: none; color: black;"><strong>Create File</strong></a>
     </li>

      <li>
      <a href="index.php?file_status" style="text-decoration: none; color: black;"><strong>File Status</strong></a>
     </li>
     <li>
    <a href="index.php?add_employees" style="text-decoration: none; color: black;"><strong>Members</strong></a>
    </li>

    <?php
}

if( $customer_desgn == 'Employee' ) {

    ?>
     <li>
    <a href="index.php?emp_status" style="text-decoration: none; color: black;"><strong>Files</strong></a>
    </li>
     <li>
    <a href="index.php?my_profile" style="text-decoration: none; color: black;"><strong>My Profile</strong></a>
    </li>
<?php


}
?>




    </ul>
  </div>
  <header id="header" >
    <div class="mui-appbar mui--appbar-line-height">
      <div class="mui-container-fluid" style="background-color: #f7f7f7">
        <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer" style="color: black;">☰</a>
        <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer" style="color: black;">☰</a>
        <span class="mui--text-title mui--visible-xs-inline-block mui--visible-sm-inline-block">
          <a href="www.elcbits.com"><img class="elec-logo" src="logo.png"></a>
        </span>






        <div class="dropdown" >

    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="font-size: 16px;">  Hi

     <?php

     echo $customer_name;;


           

 ?> !

            <span class="caret"></span></button>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size: 16px;">
    <a class="dropdown-item" href="../logout.php">Logout</a>
   
  </div>
           
          </div>





        </div>
      </div>
    </header>
    <div id="content-wrapper" style="background-color: white">
      <div class="mui--appbar-height"></div>



<br>


      <div class="mui-container-fluid">
       






<?php



if (isset($_GET['create_file'])) {

include "create_file.php"; 

}

elseif (isset($_GET['my_profile'])) {

include "my_profile.php"; 

}


elseif (isset($_GET['profile_id'])) {

include "profile.php"; 

}



elseif (isset($_GET['file_status'])) {

include "file_status.php"; 

}


elseif (isset($_GET['emp_status'])) {

include "emp_status.php"; 

}

elseif (isset($_GET['status_id'])) {

include "status.php"; 

}

elseif (isset($_GET['add_employees'])) {

include "add_employees.php"; 

}








else{

include "info.php"; 
}

?>


 
        

        

      </div>
    </div>



<br>
<br>
<br>






    <footer id="footer" style="height: 100px;">
      <div class="mui-container-fluid">
        <br>
        Made with ♥ by <a href="https://www.elecbits.in">Elecbits</a>
      </div>
    </footer>
  </body>
  </html>
<?php


}
?>