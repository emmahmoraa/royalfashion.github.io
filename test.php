<?php
	$server = $_POST['localhost'];
	$user = $_POST['root'];
	$pass = $_POST['1234'];
	$db = $_POST['RoyalFashion'];
	
	$con = mysqli_connect ($server, $user, $pass, $db);
	if (!$con) {
		die ('Could not connect');
	}
	
	$MyName = $_POST ['myname'];
	$query = "INSERT INTO test (Name) VALUES ($MyName)";
?>




<html>
	<head>My test</head>
	<body>
		<form action='test.php' method='POST'>
			My Name: <input type='text' name='myname'> <br/>
			<input type='submit'>
		</form>
	</body>
</html>