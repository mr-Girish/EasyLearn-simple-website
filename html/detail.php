<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<h1>Welcome to the details page</h1>
	<?php
		require_once("../function/function.php");
		if (isset($_GET['id'])) {
			$id=$_GET['id'];
			 get_detail($id);
		}
	?>
</body>
</html>