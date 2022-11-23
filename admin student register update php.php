<html>
<body>
<form action="updatequery.php" method="POST">
<center>
<font size=5 color="blue"><u>Update From</u></font>
<br><br>
<?php
$con=mysql_connect("localhost","root");
if (!$con)
{
	die('Could not connect: '.mysql_error());
}
mysql_select_db("college",$con);

$result=mysql_query("SELECT * FROM studentregister where Roll='{$_POST['roll']}'");

$num_rows=mysql_num_rows($result);

if(($num_rows)==1){
	echo "<table border='1'>
		<tr>
		<th>Name</th>
		<th>Course</th>
		<th>Batch Name</th>
		<th>Roll</th>
		<th>Address</th>
		<th>Mail</th>
		<th>Phone</th>
		<th>Class starting date</th>
		</tr>";
		while($row=mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td><center>".$row['Name']."</center></td>";
				echo "<td><center>".$row['Course']."</center></td>";
				echo "<td><center>".$row['BatchName']."</center></td>";
				echo "<td><center>".$row['Roll']."</center></td>";
				echo "<td><center>".$row['Address']."</center></td>";
				echo "<td><center>".$row['Mail']."</center></td>";
				echo "<td><center>".$row['Phone']."</center></td>";
				echo "<td><center>".$row['ClassStartingDate']."</center></td>";
				echo "</tr>";
			}
	echo "</table>";



	echo"<table border=0>
		<tr>
		<td>Name:</td>
		<td><input type='text' name='name'><td>
		</tr>
		
		<tr>	
		<td>Course:</td>
		<td><input type='text' name='course'><td>
		</tr>
		
		<tr>
		<td>Batch Name:</td>
		<td><input type='text' name='batchname'><td>
		</tr>
		
		<tr>
		<td>Roll:</td>
		<td><input type='text' name='roll'><td>
		</tr>
		
		<tr>
		<td>Address:</td>
		<td><input type='text' name='address'><td>
		</tr>
		
		<tr>
		<td>Mail:</td>
		<td><input type='text' name='mail'><td>
		</tr>
		
		<tr>
		<td>Phone:</td>
		<td><input type='text' name='phone'><td>
		</tr>
		
		<tr>
		<td>Class starting date:</td>
		<td><input type='text' name='classstartingdate'><td>
		</tr>
		
		<tr>
		<td></td>
		<td><input type='submit' value='Update'>
		<input type='Reset'></td>
		</tr>
		</table>
		</form>";
	
}

else
{
	echo "Record not found";
}
mysql_close($con);

?>


</body>
</html>
