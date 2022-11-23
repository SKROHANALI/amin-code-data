<?php
$con=mysql_connect("localhost","root");
if (!$con)
{
	die('Could not connect: '.mysql_error());
}
mysql_select_db("college",$con);
$sql="INSERT INTO studentregister(Name, Course, BatchName, Roll, Address, Mail, Phone, ClassStartingDate) 
VALUES('{$_POST['name']}','{$_POST['course']}','{$_POST['batch']}','{$_POST['roll']}','{$_POST['address']}','{$_POST['mail']}','{$_POST['phone']}','{$_POST['class']}')";

if(!mysql_query($sql,$con))
{
	die('Error: '.mysql_error());
}
else{
	echo "<script>alert('Inserted Successfully')</script>";
}
mysql_close($con)
?>