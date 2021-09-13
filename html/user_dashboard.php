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
	<title>User dashboard</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/main.css"> -->
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	.easy{
		color: black;

		font-size: 60px;
	}
	h1{
		color: black;
	}
	.user{
		margin-top: 10%;
		margin-left: 5%;
	}
	.courses{
		color: green;
		font-size: 20px;
		margin-left: 4%;
	}
	.logout{
		float: right;
		font-size: 30px;
		padding: 1% 2%;
	}
	.footer
	{
		margin-bottom: 5%;
		/*height: 100px;*/
		font-size: 30px;
		font-family: sans-serif;
		text-align: center;
		background-color: black
		/*margin-top:5%;*/
	}
	.footer p{
		color: white;
	}

</style>
<body>

	<div class="data">
	<li><div class="easy"><i><b>Easy Learn</b></i></div></li>
	<div class="logout"><a href="logout.php"><b>Logout</b></a></div>

<div class="user">	<h1>Welcome To In Your account...
		please select the course want you learn<br>
		Available courses are:
	</div><br>
	<li><a><b>Category</b></a>
						<ul>
						
						<li><a><a href="document/basic_english.php">Basic English</a></a></li>
						<li><a><a href="document/reasoning.php">Reasoning</a></a></li>
						<li><a><a href="document/maths.php">Maths</a></a></li>
						<li><a><a href="document/spoken_english.php">Spoken English</a></a></li>
						<li><a><a href="document/history.php">History</a></a></li>
						<li><a><a href="document/current_affairs.php">Current affirs</a></li>
						<li><a><a href="document/general_knowledge.php">General knowledge</a></a></li>
						<li><a><a href="document/others">Others</a></a></li>
					</ul>
				 </li>

		<div class="courses">
							<li><a><a href="../document/current_affairs.php">  Current Affairs</a><br></a></li>
							<li><a><a href="../document/basic_english.php"> Basic  English</a><br></a></li>
							<li><a> General Knowledge<br></a></li>
							<li><a> Interesting knowledge<br></a></li>
							<li><a> Mathmatical <br></a></li>
							<li><a> Sports News<br></a></li>
							<li><a> Politicd News<br></a></li>
							<li><a> Basic knowlege of Computer<br></a></li>
							<li><a> Physics & Chemistry<br></a></li>
							<li><a> English Vocabulary <br></a></li>
							<li><a> Today's News<br></a></li>
							<li><a> Quiz of your practic<br></a></li>
							<li><a> Biological<br></a><li>
							<li><a> others</a></li>
		</div>

<div class="footer">
	<p>@copyright feel free no issue</p>
</div>
</body>
</html>