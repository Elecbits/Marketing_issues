<!DOCTYPE html>
<html lang="en-US">
<head>
<title>SPACE-O :: Get Visitor Location using HTML5</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script>

$(document).ready(function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else { 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position) {
	
    var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;
    

	$.ajax({
		type:'POST',
		url:'getLocation.php',
		data:'latitude='+latitude+'&longitude='+longitude,
		success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
		}
	});

}
</script>

</head>
<body>
    
</body>
</html>
