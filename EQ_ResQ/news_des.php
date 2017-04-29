 <?php
  
 ?>
 <!DOCTYPE html>
<html>
<head>
<title>EQ-ResQ</title>
<style  type="text/css" >
body{
	font-family: "open Sans", sans-serif;
margin: 0;
background-color: #eaecee ;

}
.tab{
	font-size:25px;
 word-spacing:30px;
 border:1px solid black;
 border-collapse: collapse;
 }
 
.tab2{
 font-size:25px;
 word-spacing:30px; 
 background-color: #a2d9ce ;
 border: 1px  solid black;
 border-spacing:50px;
 }	
.don{
font-size:14px;
padding:6px 14px;
color:#e74c3c;
border-radius:5px;
}
.footer{
background-color:black;
}
.head{
	background-color:;
}
a{text-decoration:none;}


 
</style>
</head>
<body>
<div class="head">
<h1 align='center' ><a href="index.php">EQ-ResQ</a></h1>
</div>
<hr>
<div class="tab">
<table border="1px solid black" width="300" cellpadding="10px">
		<tr>
			<td><a href="news.php" >News</a></td>
			<td><a href="filter.php">Research</a></td>
			<td><a href="safety.php">Precaution</a></td>
		</tr>
		
</table>
</div>
<hr>
<h3 style="color:red;">If you want to donate click here</h3>


<?php
	$db= mysqli_connect("127.0.0.1","root","","eq_resq");
	 
	$cmd= "select heading,date,filename,time from news";
	$res= mysqli_query($db,$cmd);
	if($res==NULL)
	{
		echo "error 2";
	}
	 mysqli_close($db);
	$row= mysqli_fetch_assoc($res);
		
$pid=$_GET['pid'];
echo"
<div style='font-size:14px;
padding:6px 14px;
color:#e74c3c;
border-radius:5px;'>
<form method='get'  action='donate.php?pid=".$row['heading']."'>
<input type='submit' value='Donation' >
</form>
</div>
";
	$readin=file('news/'.$pid.'.txt');
	foreach($readin as $p1){
	echo "<h2>$p1</h2>";
	}
	$strn1  = explode(' ',$p1);
	$strn2 = implode('_',$strn1);

	$strn2;
	   
	   
	   ?>
<div class="footer">
<h2 style="color:white;">Contact:<h2>
<p style="text-align:right; color:white;"><a href="fb.com">click here to download our app</a></p>
<p style="text-align:left; color:white;">Address:7/A,Dhanmondi,Dhaka</p>
<p style="text-align:left; color:white;">Phone: 01717XXXXXX</p>
</div>
		
</table>
</body>
</html> 