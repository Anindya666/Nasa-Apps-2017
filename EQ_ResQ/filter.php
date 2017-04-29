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
.footer{
background-color:black;
}
.head{
	background-color:;
}
 table,tr,th,td
 {
    border: 1px  solid black;border-collapse:collapse;font-size:25px;
 }



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
<form>
<h1>Search by location</h1>
   <input type="text" name="valuesearch"  placeholder="Value to search"><br><br>
   <input type="submit" name="search" value="Filter"><br><br>
<table>
 <tr>
     <th>time</th>
     <th>latitude</th>
     <th>longitude</th>
     <th>depth</th>
     <th>mag</th>
     <th>rms</th>
     <th>place</th>
     
 </tr>
 <?php
 $row=null;

 
 //if(isset($_POST['search']))
if(isset($_GET['search']))	 
  {
  //$valuesearch=$_POST['valuesearch'];
  $valuesearch=$_GET['valuesearch'];
  
  $query="SELECT * FROM e_data WHERE place LIKE '%".$valuesearch."%'";
  
  $db= mysqli_connect("127.0.0.1","root","","eq_resq");
  $res= mysqli_query($db,$query);
  
  $row= mysqli_fetch_assoc($res);
		if($row==NULL)
		{
			echo "null -_- ";
		}
		
	mysqli_close($db);
	
	
  }
  else
  {

	 $query="SELECT * FROM e_data";
  
  $db= mysqli_connect("127.0.0.1","root","","eq_resq");
  $res= mysqli_query($db,$query);
  
  $row= mysqli_fetch_assoc($res);
		if($row==NULL)
		{
			echo "null -_- ";
		}
		
	mysqli_close($db);
  
  }
 
 
 while($row != NULL)
 {
	 echo "
	

	 <tr>
     <td>".$row['time']."</td>
     <td>".$row['latitude']."</td>
     <td>".$row['longitude']."</td>
     <td>".$row['depth']."</td>
     <td>".$row['mag']."</td>
     <td>".$row['rms']."</td>
     <td>".$row['place']."</td>
     
 </tr>";
	 $row= mysqli_fetch_assoc($res);
 }
 
 ?>

</table>
</form>
<div class="footer">
<h2 style="color:white;">Contact:<h2>
<p style="text-align:right; color:white;"><a href="fb.com">click here to download our app</a></p>
<p style="text-align:left; color:white;">Address:7/A,Dhanmondi,Dhaka</p>
<p style="text-align:left; color:white;">Phone: 01717XXXXXX</p>
</div>
</body>
</html> 