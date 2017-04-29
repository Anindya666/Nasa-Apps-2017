<!DOCTYPE html>
<html>
<head>
<title>EQ-ResQ</title>
<style type="text/css" >
body{
font-family: "open Sans", sans-serif;
margin: 0;
background-color: #eaecee ;
}
.footer{
background-color:black;
}
.head{
	background-color:#34495E;
}
table{font-size:25px; word-spacing:30px; color:#B01559;border-collapse:collapse;}
a{text-decoration:none;}


</style>
</head>
<body>


<div class="">
<div class="head">
<h1 align='center' ><a href="home.php">EQ-ResQ</a></h1>
</div>
<hr>
<table border="1" width="300" cellpadding="10px">
		<tr>
			<td><a href="news.php" >News</a></td>
			<td><a href="filter.php">Research</a></td>
			<td><a href="safety.php">Precaution</a></td>
		</tr>
		
</table>
<hr>
<script>
          var i=0;
          var marker;
          var coo_name=new Array();
          var myLat =new Array();
         

</script>
<?php

	$db= mysqli_connect("127.0.0.1","root","","eq_resq");
	 
	$cmd= "select time,latitude,longitude,depth,mag,rms,place from e_data";
	$res= mysqli_query($db,$cmd);
	if($res==NULL)
	{
	 	echo "error 2";
	}
	 mysqli_close($db);
	$row= mysqli_fetch_assoc($res);
		
	$i=1;
	
	
	echo"
<script>	
 var c=0;
 </script>";
	while($row!=NULL)
	{
		echo"
		<script>
		 var cntst=".$row['latitude'].";
		 <table>
		<tr>
		<td>var</td>
				

		<br>
		 </tr></table>
		 
		</script>
	";	
		
		
		$j=0;
		$row= mysqli_fetch_assoc($res);
		
	}
	

?>
<section class="mapsp">
   <div class="container text-center">

    <div class="row">
      <h2></h2>
        <div class="col-md-6">
          <div class="well">
          <div id="map"style="height:1200px;background:"></div>
    <script>

      function initMap() {
         var i=0;
          var marker;
          var coo_name=new Array();
         var myLatLng =new Array();
          myLatLng[0]={lat: 23.777176, lng: 90.399452};
          coo_name[0]='Dhaka,Bangladesh';
          myLatLng[1]={lat: 25.744860, lng: 89.275589};
          coo_name[1]='Rangpur,Bangladesh';

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: myLatLng[0]
        });

        
        for(i=0;i<myLatLng.length;i++)
        {
          marker = new google.maps.Marker({
          position: myLatLng[i],
          map: map,
          title: coo_name[i]
        });
        }
      }
    </script>
        </div>
        </div>
        <div class="col-md-6" id="map_pera">
          <div class="well">
          
          </div>
        </div>
      </div>

   </div>

</section>
  
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBxRRZY0e8a7o-vQTQpCCbOoVF_IzyMuM&callback=initMap">
    </script>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  

</body>
</html> 