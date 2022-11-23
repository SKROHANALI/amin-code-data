<?php
$con=mysql_connect("localhost","root");
if (!$con)
{
	die('Could not connect: '.mysql_error());
}
mysql_select_db("college",$con);
$sql="INSERT INTO marks(Roll, Name, 1stModule, 2ndModule, 3rdModule, 4thModule, 5thModule, Total, Calculate) 
VALUES('{$_POST['roll']}','{$_POST['name']}','{$_POST['mod1']}','{$_POST['mod2']}','{$_POST['mod3']}','{$_POST['mod4']}','{$_POST['mod5']}','{$_POST['total']}','{$_POST['grade']}')";

if(!mysql_query($sql,$con))
{
	die('Error: '.mysql_error());
}
else{
	echo "<script>alert('Inserted Successfully')</script>";
}
mysql_close($con)
?>