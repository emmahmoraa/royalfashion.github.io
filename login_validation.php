<?php

	if(isset($_POST ['Register'])){
		
		$UserName = filter_input (INPUT_POST, 'UserName');
		$Password = filter_input (INPUT_POST, 'Password');
		if(!empty ($_POST ['UserName']) && !empty($_POST ['Password']))
		{
					$host = "localhost";
					$user = "root";
					$password = "1234";
					$db = "RoyalFashion";
					
					//create connection 
					$conn = mysqli_connect($host, $user, $password, $db);
					if(mysqli_connect_error()){
					die('Connect Error('.mysqli_connect_errno() .')');
					}else {
						
						//check if username exists
						$sqryselect="SELECT * FROM users WHERE UserName = '$UserName' && Password='$Password' ";
						$result = mysqli_query($conn, $sqryselect);
							if((mysqli_num_rows($result)>0)){
							echo "<script type='text/javascript'> alert ('You have been logged on successfully')</script>";
							header ("refresh:1; url=index.html");
						}
						else{
						echo "<script type='text/javascript'> alert ('You entered wrong log in details')</script>";
						}
			}
		}else {
		echo "<script type='text/javascript'> alert ('Enter both your User Name and Password')</script>";
		}
				
	}
?>