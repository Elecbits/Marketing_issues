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

<div  class="col-lg-12 ">


    <form method="post" action="">
 <button type="submit" name="loc" class="btn btn-primary">Detect Location</button>
</form>

<br>


<span id="location"></span>


<?php

if (isset($_POST['loc'])) {
  
  include 'location.php';
}

?>



<div class="col-lg-12">
  
  <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>


</div>





     </div>





</body>
</html>



