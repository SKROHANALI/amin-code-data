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
	echo "<center><table border='1'>
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
				echo "<td>".$row['Name']."</td>";
				echo "<td>".$row['Course']."</td>";
				echo "<td>".$row['BatchName']."</td>";
				echo "<td>".$row['Roll']."</td>";
				echo "<td>".$row['Address']."</td>";
				echo "<td>".$row['Mail']."</td>";
				echo "<td>".$row['Phone']."</td>";
				echo "<td>".$row['ClassStartingDate']."</td>";
				echo "</tr>";
			}
	echo "</table></center>";

}
else
{
	echo "Record not found";
}
mysql_close($con);

?>

