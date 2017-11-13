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

<div  class="col-lg-12 " style="text-align: center;">


    <form method="post" action="">
 <button type="submit" name="loc" class="btn btn-primary">Detect My Location</button>
</form>

<br>


<span id="location"></span>


<?php

if (isset($_POST['loc'])) {
  
  include 'location.php';



?>



<div class="col-lg-12" style="text-align: center;">
  
  <p>
 
 <br>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
   Nearby Me
  </button>
</p>
<div class="collapse" id="collapseExample1">
  <div class="card card-body">

<div class="col-xs-12 row" style="text-align: center;">
    <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/shopping.png" height="30" width="auto" >
      <br>
 <a  href="#"  style="font-size: 13px;">Shopping</a>

          </div>

       <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/eatout.png" height="30" width="auto">
      <br>
 <a  href="#"  style="font-size: 13px;">Eat Out</a>


          </div>  

            <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/health.png" height="30" width="auto">
      <br>
 <a  href="#"  style="font-size: 13px;">Health</a>
 

          </div>


             <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/home.png" height="30" width="auto">
      <br>
 <a  href="#"  style="font-size: 13px;">Auto</a>


          </div>




        <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/grocery.png" height="30" width="auto" >
      <br>
 <a  href="#"  style="font-size: 13px;">Grocery</a>

          </div>

       <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/elec.png" height="30" width="auto">
      <br>
 <a  href="#"  style="font-size: 13px;">Electronics</a>


          </div>  

            <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/dairy.png" height="30" width="auto">
      <br>
 <a  href="#"  style="font-size: 13px;">Dairy</a>
 

          </div>


             <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/stationary.png" height="30" width="auto">
      <br>
 <a  href="#"  style="font-size: 13px;">Stationary</a>


          </div>

 <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/movies.png" height="30" width="auto" >
      <br>
 <a  href="#"  style="font-size: 13px;">Movies</a>

          </div>

       <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/sports.png" height="30" width="auto">
      <br>
 <a  href="#"  style="font-size: 13px;">Sports</a>


          </div>  

            <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/travel.png" height="30" width="auto">
      <br>
 <a  href="#"  style="font-size: 13px;">Travel</a>
 

          </div>


             <div class="col-xs-3" style="padding: 5px 5px 5px 5px;">
      <img src="../image/music.png" height="30" width="auto">
      <br>
 <a  href="#"  style="font-size: 13px;">Music</a>


          </div>


</div>
  </div>
</div>












</div>

<?php

}

?>



     </div>





</body>
</html>



