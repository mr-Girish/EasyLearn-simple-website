 <?php
	require_once("connect.php");
	$conn=connect();
	create_website1();

	function create_website1()
	{
		global $conn;
		$sql="CREATE TABLE website1(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		fname VARCHAR(255) NOT NULL,
		lname VARCHAR(255) NOT NULL,
		email VARCHAR(255) NOT NULL,
		password VARCHAR(255) NOT NULL,
		pnumber VARCHAR(255) NOT NULL,
		address VARCHAR(255) NOT NULL,
		user_type VARCHAR(255) DEFAULT 'user',
		profile VARCHAR(255) DEFAULT 'default.jpg',
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