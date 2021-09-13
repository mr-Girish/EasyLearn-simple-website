<?php
	function connect()
	{
		$server="localhost";
		$user="website";
		$password="12345";
		$database="website";

		$conn=mysqli_connect($server,$user,$password,$database);
		if ($conn) {
			return $conn;
		}
		else{
			echo "not connected";
		}
	}
?>