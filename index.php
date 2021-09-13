<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	

</head>
<body>

<div class="container">
		<?php
		require_once("html/menu_bar.php");
		?>


<!-- <div class="row">
	<form action="index.php" method="post">
		<input type="search" name="search" value="<?php if(isset($_POST['search'])){echo $_POST['search'];}?>">
		<input type="submit" name="sub" value="Search">
	</form>
</div>  -->   <!-- row -->

	<!-- <img src="website/1.jpg"> -->
	<pre>
	
	</pre>
	<p class="study">This Page is Related To Study Of Anything....<br>
	what you want learn?</p>
	
	<?php
		require_once("function/function.php");
		if (isset($_POST['sub'])) {
			$search=$_POST['search'];
			if(!empty($search))
			{
				load_text($search);
				echo "successfullly";
			}
		}

			?><div class="footer">

	<?php require_once("html/footer.php");?>
</div>
		</div>    <!-- container -->

	
</body>
</html>