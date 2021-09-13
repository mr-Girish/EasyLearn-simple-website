<?php 

	session_start();
	if(isset($_SESSION['fname'])){

	}
	else{
		$url="login.php";
		header("Location: $url");
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
</head>
<body>
	<a href="logout.php">Logout</a>

	<h1>Welcome To Home Page
		<?php

			if(isset($_SESSION['fname'])){
				echo $_SESSION['fname']."".$_SESSION['lname'];
			}
		?>
	</h1>

</body>
</html>