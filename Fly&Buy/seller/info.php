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
  


</div>

<?php

}











?>



     </div>





</body>
</html>



