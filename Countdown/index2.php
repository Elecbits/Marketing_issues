<!DOCTYPE html>
<html lang="en">



    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" type="text/css" href="form.css">
			<!-- Website Font style -->
	   
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.css">
		<link rel="stylesheet" href="css/bootstrap.css">

<script src="js/bootstrap.min.js" ></script>
<script src="js/jquery-3.2.1.min.js" ></script>
		<!-- Google Fonts -->
	

		<title>Countdown</title>

	</head>
	<style>
p {
  text-align: center;
  font-size: 60px;
}
</style>

	<body>
		<div class="container-fluid">

<br>

<div class="col-lg-12 row">
<div class="col-lg-3" style="text-align: left; ">

  



            <form method="post" action="">
          
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Input Day:</label>
            <input type="number" class="form-control" id="recipient-name" name="day">
          </div>
          <div class="form-group">
          <input type="submit" value="UPDATE" name="update2">          
          </div>


            <div class="form-group">
             <a href="index.php" type="button" class="btn btn-primary">By Date</a>     
          </div>

        </form>




</div>

















<?php

if (isset($_POST['update2'])) {
    
$day = $_POST['day'];


$my_file = 'file2.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = $day;

if(fwrite($handle, $data))
{
echo"<script>alert('Day has been updated !')</script>";

}

}

?>





<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 15, 2017 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds

<?php

$my_file = 'file2.txt';
$handle = fopen($my_file, 'r');
$day1 = fread($handle,filesize($my_file));




?>









    var days = <?php echo $day1; ?>;
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
document.getElementById("demo_day").innerHTML = days ;

    document.getElementById("demo2").innerHTML =  hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>








<div class="col-lg-7" style="padding-left: 180px; text-align: center; font-size: 160px; font-weight: 900;">

  DLTGH:

<p style="font-size: 150px; font-weight: 900;" id="demo_day"></p>

<p id="demo2"></p>




</div>
</div>


		</div>



<div style="padding-left: 150px;">
  <div class="col-lg-2" style=" position:fixed;  top:0;
 right:0; font-size: 30px; font-weight: 600; align-content: right;">
  <?php 
   date_default_timezone_set('Asia/Kolkata');
  echo date("d/m/Y"); ?>
</div>
</div>




<div class="col-lg-2" style=" position:fixed;
 bottom:0;
 right:0; background-color: white; color: black; border-color: black;font-weight: 600; border-style: solid; padding: 5px 5px 5px 5px;">
  Powered by <img src="elecbits_new.png" height="20" width="auto">
</div>





	</body>
</html>
