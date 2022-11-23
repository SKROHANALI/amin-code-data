<html>
<body>
<form action="updatequery2.php" method="POST">
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

$result=mysql_query("SELECT * FROM marks where Roll='{$_POST['roll']}'");

$num_rows=mysql_num_rows($result);

if(($num_rows)>0){
	echo "<table border='1'>
		<tr>
		<th>Roll</th>
		<th>Name</th>
		<th>1st Module</th>
		<th>2nd Module</th>
		<th>3rd Module</th>
		<th>4th Module</th>
		<th>5th Module</th>
		<th>Total</th>
		<th>Grade</th>
		</tr>";
		while($row=mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$row['Roll']."</td>";
				echo "<td>".$row['Name']."</td>";
				echo "<td>".$row['1stModule']."</td>";
				echo "<td>".$row['2ndModule']."</td>";
				echo "<td>".$row['3rdModule']."</td>";
				echo "<td>".$row['4thModule']."</td>";
				echo "<td>".$row['5thModule']."</td>";
				echo "<td>".$row['Total']."</td>";
				echo "<td>".$row['Calculate']."</td>";
				echo "</tr>";
			}
	echo "</table>";



	echo"<table border=0>
		<tr>
		<td>Roll:</td>
		<td><input type='text' name='roll'><td>
		</tr>
		
		<tr>	
		<td>Name:</td>
		<td><input type='text' name='name'><td>
		</tr>
		
		<tr>
		<td>1st Module:</td>
		<td><input type='text' name='mod1'><td>
		</tr>
		
		<tr>
		<td>2nd Module:</td>
		<td><input type='text' name='mod2'><td>
		</tr>
		
		<tr>
		<td>3rd Module:</td>
		<td><input type='text' name='mod3'><td>
		</tr>
		
		<tr>
		<td>4th Module:</td>
		<td><input type='text' name='mod4'><td>
		</tr>
		
		<tr>
		<td>5th Module:</td>
		<td><input type='text' name='mod5'><td>
		</tr>
		
		<tr>
		<td>Total:</td>
		<td><input type='text' name='total'><td>
		</tr>
		
		<tr>
		<td>Grade:</td>
		<td><input type='text' name='grade'><td>
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
