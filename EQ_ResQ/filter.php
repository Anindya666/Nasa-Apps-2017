 <?php
  
 ?>
 <!DOCTYPE html>
<html>
<head>
<style>
body{
	font-family: "open Sans", sans-serif;

}
</style>
<title>EQ-ResQ</title>
<style>
 table,tr,th,td
 {
    border: 1px  solid black;
 }
</style>
</head>
<body>
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
</body>
</html> 