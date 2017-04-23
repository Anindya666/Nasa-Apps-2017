 <!DOCTYPE html>
<html>
<head>
<title>EQ-ResQ</title>
<style>
body{
font-family: "open Sans", sans-serif;
margin: 0;
}
.content{
width:100%;
height:100%;
position:;
background:#eee;
padding:30px;
} 

.sidebar{
position:absolute;
width: 200px;
height: 100%;
margin-top: 4px;

background: #333;
color : #fff;
outline: 1px solid #2a2a2a;
transition:all 0.3s;
}
.sidebar h2{
text-align: center;
margin: 0;
padding: 10px;
background: #2a2a2a;
  }

.sidebar ul{
list-style: none;
padding: 0;
margin: 0;
height: 20px;
}

.sidebar li{
outline: 1px solid #2a2a2a;

}
.sidebar li:hover{
background: #444;

border-left: 5px solid #eee;
}

.menu-bar{
cursor:pointer;
height: 2em;
weight: 2em;

}




</style>
</head>
<body>
<div style="position:absolute;margin-top:50px;margin-left:200px;width:1200px;height:1200px">
<iframe src="https://www.google.com/maps/d/embed?mid=1MN3ikgXP_vvsUTiWcUMCmOsEul0" width="100%" height="100%"></iframe>
</div>
<h1 align='center'>EQ-ResQ</h1>

<div class="sidebar">
 <h2>MENU</h2>
 <ul>
   <li><a href="filter.php" style="text-decoration : none" >Filter</a></li>
    
   <li>Donation</li>
 </ul>
</div>

<!--<div class="content">
   <img src="small.png" alt="" class="menu-bar">
</div>-->
 
 
<div id="googleMap" style=></div>
<script src="nab.js"></script>
<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(23.684994,90.356331),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<!--<script src="https://www.google.com/maps/d/embed?mid=1MN3ikgXP_vvsUTiWcUMCmOsEul0"></script>-->

</body>
</html> 