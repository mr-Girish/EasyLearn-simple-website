<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div class="container">
	<?php
	require_once("menu_bar1.php");
	?>
	<?php
		require_once("../function/function.php");
		if (isset($_POST['sub'])) {
				$fname=$lname=$email=$psword=$pnumber=$add="";
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$email=$_POST['email'];
				$psword=$_POST['psword'];
				$pnumber=$_POST['pnumber'];
				$add=$_POST['add'];

				if(!empty($fname) && !empty($lname) && !empty($email) &&  !empty($psword) &&    !empty($pnumber)  && !empty($add)){
					register($fname,$lname,$email,$psword,$pnumber,$add);
				}
				else{
						echo "please fill up the data";
						
				}
			}	
	?>
<div class="center">
	<div class="frm">
	<form  action="register.php" method="post">
	
		<h1>Register page</h1>
		<p>
			<label for="fname">First name</label>
			<input type="text" name="fname">
		</p>
		<p>
			<label for="lname">Last Name</label>
			<input type="text" name="lname">
		</p>
		<p>
			<label for="email">Email Id</label>
			<input type="email" name="email">
		</p>
		<p>
		<label for="psword">Password</label>
		<input type="text" name="psword">
	</p>
		<p>
			<label for="pnumber">Phone Number</label>
			<input type="Number" name="pnumber">
		</p>
		<p>
			<label for="add">Address</label>
			<input type="text" name="add">
		</p>
		<p>
			<input class="btn" type="submit" name="sub" value="Register">
			
		</p>
	
		</form>
	</div>
		
</div>	<div class="footer">

	<?php require_once("footer.php");?>
</div>



</body>
</html>