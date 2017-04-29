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
<div class="head">
<h1 align='center' ><a href="index.php">EQ-ResQ</a></h1>
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
<div style="position:absolute;margin-top:70px;margin-left:10px;width:100%;height:100%">
<iframe src="https://www.google.com/maps/d/embed?mid=1MN3ikgXP_vvsUTiWcUMCmOsEul0" width="100%" height="100%"></iframe>
</div>
<!--<div id="googleMap" style=></div>-->
<hr>
<br>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(23.684994,90.356331),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>


</body>
</html> 