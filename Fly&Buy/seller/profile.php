<!DOCTYPE html>
<html>
<head>
	<title></title>

  <style type="text/css">
  .btn{
    font-size: 14px;
  }
</style>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>




<body>

<div  class="col-lg-12 ">



  <div class="container">
 <?php

$i = $j = $k = $m = $n =0;


          if (isset($_GET['profile_id'])) {
  
  $c_email = $_GET['profile_id'];

}


      global $con;



      $location_query ="SELECT * FROM file_info WHERE user='$c_email' ";

      $run_name_query = mysqli_query($con , $location_query);

      $check_count =  mysqli_num_rows($run_name_query);


      while ($row_name_pro = mysqli_fetch_array($run_name_query)) 
    {

        $status = $row_name_pro['status'];
if ($status=='Approved') {
$m++;
}
if ($status=='Disapproved') {
$n++;
}



        $file_loc = $row_name_pro['new_loc'];
       $file_graph = explode("/", $file_loc);
             if ($file_graph[1]=='location1') {
               $i++;
             }
             if ($file_graph[1]=='location2') {
               $j++;
             }
             if ($file_graph[1]=='location3') {
               $k++;
             }

        }

 ?>




 <blockquote class="blockquote" style=" border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; font-size: 20px;  padding: 10px 10px 10px 10px;" >
  <p class="mb-0" >Location Distribution</p>
</blockquote>

<br>
    
Total Number of File operated - <?php echo $check_count; ?>

<br>






  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["location1", <?php echo $i;?>, "#b87333"],
        ["location2", <?php echo $j;?>, "silver"],
        ["location3", <?php echo $k;?>, "gold"],
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Distribution of File Location",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>


  <div id="columnchart_values" style="width: 900px; height: 300px;"></div>


<br>
<br>
<br>
<br>
<br>



 <blockquote class="blockquote" style=" border-style: solid; border-radius: 10px; border-color: #f7f7f7 ; font-size: 20px;  padding: 10px 10px 10px 10px;" >
  <p class="mb-0" >Approval Status</p>
</blockquote>

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Approved',     <?php echo $m; ?>],
          ['Disapproved',  <?php echo $n; ?>],
        
        ]);

        var options = {
          title: 'Approval Status',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>

</div>


    </div>





</body>
</html>