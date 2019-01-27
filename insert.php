<?php

	if(isset($_POST ['Register'])){
		
		$FirstName = filter_input (INPUT_POST, 'FirstName');
		$LastName = filter_input (INPUT_POST, 'LastName');
		$Sex = filter_input (INPUT_POST, 'Sex');
		$UserName = filter_input (INPUT_POST, 'UserName');
		$Email = filter_input (INPUT_POST, 'Email');
		$MobileNo = filter_input (INPUT_POST, 'MobileNo');
		$Password = filter_input (INPUT_POST, 'Password');
		$ConfirmPassword = filter_input(INPUT_POST, 'ConfirmPassword');
		if(!empty ($_POST['FirstName'])&& !empty ($_POST ['LastName'])&&!empty ($_POST ['UserName']) && !empty ($_POST ['Email']) && !empty ($_POST ['MobileNo']) && !empty($_POST ['Password']) && !empty($_POST ['ConfirmPassword']))
		{
			if (strlen ($FirstName)>20){
				echo '	<script language="javascript">
						alert("The First Name is too long")
						</script>';
			} 
			elseif (strlen ($LastName)>20){
				echo 	"<script language='javascript'>
							alert('The Last Name is too long')
						</script>";
			}
			elseif (strlen ($UserName)>40){
				echo	"<script language='javascript'>
							alert('The User Name is too long')
						</script>";
			}
			elseif( strlen ($MobileNo)>20){
				echo 	"<script language='javascript'>
							alert('Invalid phone number')
						</script>";
			}
			elseif(!is_numeric($MobileNo)){
				echo 	"<script language='javascript'>
							alert('Invalid phone number')
						</script>";
			}
			elseif( strlen($Password)>8){
				echo	"<script language='javascript'>
							alert('Password cannot be more than 8 characters')
						</script>";
			}
			elseif (strlen( $Password)<4){
				echo 	"<script language='javascript'>
							alert('you have a weak password')
						</script>";
			}
			elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL)){	
				echo 	"<script language='javascript'>
							alert('Invalid Email')
						</script>";
			}
			elseif($Password!=$ConfirmPassword){
				echo "<script type='text/javascript'> alert ('Password does not match')</script>";
				
			}
			elseif($Password=$ConfirmPassword){
					$host = "localhost";
					$user = "root";
					$password = "mysql";
					$db = "royalfashion";
					
					//create connection 
					$conn = mysqli_connect($host, $user, $password, $db);
					if(mysqli_connect_error()){
					die('Connect Error('.mysqli_connect_errno() .')');
					}else {
						
						//check if username exists
						$sqryselect="SELECT * FROM user WHERE UserName = '$UserName'";
						$result = mysqli_query($conn, $sqryselect);
							if((mysqli_num_rows($result)>0)){
							echo "<script type='text/javascript'> alert ('User Name Already Used')</script>";
						}
						else{
							
							//enter data into the database if username does not exist
						$sqrypost = "INSERT INTO user (FirstName, LastName, Sex, UserName, Email, MobileNo, Password)
						VALUES('$FirstName', '$LastName', '$Sex', '$UserName', '$Email', '$MobileNo', '$Password')";
						
						if(mysqli_query($conn, $sqrypost)){
							Echo "<script type='text/javascript'> alert ('Registration is successful')</script>";

						}else {
							echo "<script type='text/javascript'> alert ('Registration Failed. Try Again')</script>";
						}
						}
					}
			}
		}else {
		echo "<script type='text/javascript'> alert ('All fields are required')</script>";
		}
				
	}
?>