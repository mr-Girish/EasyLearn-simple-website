<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		require_once("../function/function.php");
		if (isset($_POST['learn'])) {
			$keywords=$_POST['keywords'];
			$learn_subject=$_POST['learn_subject'];
			$main_text=$_POST['main_text'];
			insert($keywords,$learn_subject,$main_text);
		}

	?>
<form action="insert.php" method="post">
	<p>
		<label for="learn_subject">Insert subject?</label>
	<input type="text" name="learn_subject">
	</p>
	<p>
		<label for="keywords">Keywords</label>
		<input type="text" name="keywords">
	</p>
	<p>
		<label for="main_text">Main text</label>
		<input type="text" name="main_text">
	</p>
	<p>
		<input type="submit" name="learn" value="Insert">
	</p>
	
</form>
</body>
</html>