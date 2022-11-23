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
	echo "<center><table border='1'>
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
	echo "</table></center>";

}
else
{
	echo "Record not found";
}
mysql_close($con);

?>

