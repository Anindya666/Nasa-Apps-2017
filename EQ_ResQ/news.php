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
 word-spacing:20px; 
 background-color:#d6eaf8 ;
 border: 1px  solid black;
 border-spacing:10px;
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
		
	$i=1;
	
	
	while($row!=NULL)
	{
		$j=0;
		echo "
		<div class='tab2'>
		<table>
		<tr>
		<td><a href='news_des.php?pid=".$row['filename']."'>".$row['heading']."</a></td>
				<td><a href='news_des.php?pid=".$row['filename']."'>".$row['time']."</a></td>

		<br>
		 </tr></table>
		 
		 </div>";
		$row= mysqli_fetch_assoc($res);
		
	}
	

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