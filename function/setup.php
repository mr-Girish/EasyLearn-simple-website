 <?php
	require_once("connect.php");
	$conn=connect();
	create_website();

	function create_website()
	{
		global $conn;
		$sql="CREATE TABLE website(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		keywords VARCHAR(255) NOT NULL,
		main_text VARCHAR(255) NOT NULL,
		learn_subject VARCHAR(255) NOT NULL,
		date_time DATETIME
		)";

		$result=mysqli_query($conn,$sql);
		if ($result) {
			echo "website content table created successfully";
		}
		else
		{
			$error=mysqli_error($conn);
			echo "error:$error";
		}
	}

?>