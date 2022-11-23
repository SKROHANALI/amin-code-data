<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "college";

mysql_connect($host,$dbusername,$dbpassword);
mysql_select_db($dbname);

if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$position=$_POST['position'];
	
	$sql="select * from register where position='".$position."'AND userid='".$username."'AND password='".$password."'";
	
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)==1){
		if ($position=="Admin"){
			header('location:admin login.html');
			exit();
		}
		else{
			header('location:student login.html');
			exit();
		}
	}
	else{
		echo "you have entered incorrect password";
		exit();
	}
	
}

?>