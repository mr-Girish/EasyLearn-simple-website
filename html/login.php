 <!DOCTYPE html>
<html>
<head>
	<title>
		login page
	</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body><div class="container">
	<?php  
	require_once("menu_bar1.php");
	?>
	<?php
	require_once("../function/function.php");
	if (isset($_POST['sub'])) {
		$email=$psword="";
		$email=$_POST['email'];
		$psword=$_POST['psword'];


		if(!empty($email) && !empty($psword))
		{
			login($email,$psword);
		}
		else
		{
			echo "please fill up the data";
		}
	}
	?>
	
	
	<div class="center">
		
			<form class="frm" action="login.php" method="post">
				<h1>login page</h1>
			
		<p>
			<label for="email">Email Id</label>
			<input type="email" name="email">
		</p>
		<p>
			<label for="psword">Password</label>
			<input type="Password" name="psword">
		</p>
		<p>
			<input type="submit" name="sub" value="Login">
		</p>
	</form>
</div>
</div>   <!-- container -->
	
	<div class="footer"><?php

		require_once("footer.php");
		?></div>
</body>
</html>