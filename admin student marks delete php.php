<?php
$con=mysql_connect("localhost","root");
if (!$con)
{
	die('Could not connect: '.mysql_error());
}
mysql_select_db("college",$con);

$result=mysql_query("SELECT * FROM marks where Roll='{$_POST['roll']}'");
$num_rows=mysql_num_rows($result);


$sql="delete from marks where Roll='{$_POST['roll']}'";

if (!mysql_query($sql,$con))
{
	die('Error: '.mysql_error());
}
else
{
	if(($num_rows)>0){
	echo "<script>alert('Delete Successfully')</script>";
	}
	else
	{
	echo "<script>alert('Invalid Roll...!!!')</script>";
	}

}
mysql_close($con)
?>