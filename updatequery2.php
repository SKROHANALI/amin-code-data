<?php
$con=mysql_connect("localhost","root");
if(!$con)
{
	die('Could not connect:'.mysql.error());
}

mysql_select_db("college",$con);
$sql="UPDATE marks SET Roll='$_POST[roll]',Name='$_POST[name]',1stModule='$_POST[mod1]',2ndModule='$_POST[mod2]',3rdModule='$_POST[mod3]',4thModule='$_POST[mod4]',5thModule='$_POST[mod5]',Total='$_POST[total]',Calculate='$_POST[grade]' where Roll='$_POST[roll]'";

if(!mysql_query($sql,$con))
{
	die('Error: '.mysql_error());
}

echo "<script>alert('Update Successfully')</script>";
mysql_close($con)
?>