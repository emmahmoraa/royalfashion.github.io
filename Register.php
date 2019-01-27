<?php
	session_start;
	require "insert.php";
?>
<! DOCTYPE HTML>
<html>
	
	<head>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="userprofile.css"/>
		<title>Royal Fashion & Cosmetics</title>
		<meta name="viewport" content ="width=device-width, initial-scale=1">

	</head>
	<body>
		<div class="container">
			<header>
				<nav>
					<img src="logo.jpg" height="125" width="200" alt="No Image" class="logo"/>
					<div class="royal">
						<h1>Royal Fashion & Cosmetics</h1>
						<h3><em>Because You Are Royal</em></h3>
					</div>
						<div class="dropdown">
							<ul>
								<li>
									<div class="wrap">
											<a href="" >
													<div class="icon"></div>
													<div class="icon"></div>
													<div class="icon"></div>
											</a>
									</div>
									<h3 class="categories">Categories</h3>
										<ul>
											<h2>Categories</h2>
											<li><a href="fashion.html"> <strong>Fashion &#187</strong></a></li>
											<li><a href="cosmetics.html"> <strong>Cosmetics &#187</strong></a></li>
										</ul>
								</li>
							</ul>
						</div>
					<div class="search_toplist">
						<div class="input_group">
							<input class="search_bar" type="text" placeholder="Search items..." name="Search items..." >
							<button type="submit" class="search_btn">&#128269;</button>
						</div>
						<div class="toplist">
							<ul>
								<li><a href="" >My Account</a></li>
								<li><a href="">Cart</a></li>
								<li><a href="">Saved Items</a></li>
								<li><a href="">Help Center</a></li>
							 </ul>
						 </div>
					</div>
				</nav>
			</header>
			<section>
				<div class="userdetails">
				<h2> User Registration Details</h2>
				<hr/>
					<form action="Register.php" method="POST">
							<fieldset>
								<legend> User Registration </legend>
									<?php
											if(isset($_POST['FirstName'])){
												$FirstName=$_POST['FirstName'];
											}
											else {
												$FirstName="";
											}
											if(isset($_POST['LastName'])){
												$LastName=$_POST['LastName'];
											}
											else {
												$LastName="";
											}
											if(isset($_POST['UserName'])){
												$UserName=$_POST['UserName'];
											}
											else {
												$UserName="";
											}
											if(isset($_POST['Email'])){
												$Email=$_POST['Email'];
											}
											else {
												$Email="";
											}
											if(isset($_POST['MobileNo'])){
												$MobileNo=$_POST['MobileNo'];
											}
											else {
												$MobileNo="";
											}
											if(isset($_POST['Password'])){
												$Password=$_POST['Password'];
											}
											else {
												$Password="";
											}
												echo	"		
													<label for='FirstName'>First Name:</label><input type='text' name='FirstName' value='$FirstName'id='FirstName'></br>
													<label for='LastName'>Last Name:</label><input type='text' name='LastName' value='$LastName'id='LastName'><br/>
													<label for='Sex'>Gender:</label>Male<input type='radio' name='Sex' value='M'><br/>Female<input type='radio' value ='F' name='Sex'><br/>
													<label for='UserName'>User Name:</label><input type='text' name='UserName' value='$UserName' id='UserName'><br/>
													<label for='Email'>Email:</label><input type='text' name='Email' value='$Email'id='Email'><br/>
													<label for='MobileNo'>Mobile No.:</label><input type='text' name='MobileNo' value='$MobileNo'id='MobileNo'><br/>
													<label for='Password'>Password:</label><input type='password' name='Password' value='$Password' id='Password'><br/>
													<label for='ConfirmPassowrd'>Confirm Password:</label><input type='password' name='ConfirmPassword' id='Password'><br/>
													<input type='submit' value='Register' name='Register' id='Register'>";
									?>
							</fieldset>
					</form> 	
						<?php
							
						?>
					
				</div>
			</section>
				<footer>
				<div class="services">
					<h3>Customer Services</h3>
						<ul>
							<li><a href="">Help Center</a></li>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Submit Dispute</a></li>
							<li><a href="">Terms & Conditions</a></li>
							<li><a href="">Feedback</a></li>
						</ul>
				</div>
				<div class="about_us">
					<h3>About Us</h3>
						<ul>
							<li><a href="">About Royal Fashion & Cosmetics</a></li>
							<li><a href="">Location</a></li>
						</ul>
				</div>
				<div class="social">
					<h3>Social Links</h3>
						<ul>
							<li> <a href="">Facebook</a></li>
							<li> <a href="">Instagram</a></li>
							<li> <a href="">Twitter</a></li>
						</ul>
				</div>
				</footer>
		</div>
			</body>
</html>
