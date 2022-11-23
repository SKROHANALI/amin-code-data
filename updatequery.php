<?php
$con=mysql_connect("localhost","root");
if(!$con)
{
	die('Could not connect:'.mysql.error());
}

mysql_select_db("college",$con);
$sql="UPDATE studentregister SET Name='$_POST[name]',Course='$_POST[course]',BatchName='$_POST[batchname]',Roll='$_POST[roll]',Address='$_POST[address]',Mail='$_POST[mail]',Phone='$_POST[phone]',ClassStartingDate='$_POST[classstartingdate]' where Roll='$_POST[roll]'";

if(!mysql_query($sql,$con))
{
	die('Error: '.mysql_error());
}

echo "<script>alert('Recor Update Successfully')</script>";
mysql_close($con)
?>