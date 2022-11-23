<?php
	$name =filter_input(INPUT_POST,'name');
	$position =filter_input(INPUT_POST,'position');
	$userid =filter_input(INPUT_POST,'userid');
	$password =filter_input(INPUT_POST,'password');
	$confirmpassword =filter_input(INPUT_POST,'confirmpassword');

	if (!empty($name)){
	 if (!empty($position)){ 
	  if (!empty($userid)){
	   if (!empty($password)){
	    if (!empty($confirmpassword)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "college";
		
			$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
		
			if (mysqli_connect_error()){
				die('Connection Error('. mysqli_connect_errno().') '. mysqli_connect_error());
			}
			else{
				$sql = "INSERT INTO register (name, position, userid, password, confirmpassword) 
				values ('$name','$position','$userid','$password','$confirmpassword')";
				if ($conn->query($sql)){
					header('location: registration successful.html');
				}
				else{
				echo "Error: ". $sql ."<br>". $conn->error;
				}
				$conn->close();
			}
		}
		else{
			echo "Confirm Password should not be empty";
			die();
		}
	   }
	    else{
		    echo "Password should not be empty";
		    die();
		}
	  }
	  else{
		  echo "User Id should not be empty";
		  die();
	  }
	 }
	 else{
		 echo "Position should not be empty";
		 die();
	 }
	}
	else{
		echo "Name should not be empty";
		die();
	}
	
?>