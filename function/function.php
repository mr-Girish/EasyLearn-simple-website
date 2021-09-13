

<?php 
 	require_once("connect.php");
 	$conn=connect();


 	function insert($keywords,$learn_subject,$main_text)
 	{
 		global $conn;
 		$date_time=("Y-m-d H:i:s");
 		$sql="INSERT INTO website(keywords,learn_subject,main_text,date_time)VALUES
 			('$keywords','$learn_subject','$main_text','$date_time')";
 		$result=mysqli_query($conn,$sql);
 		if ($result) {
 			
 			echo "inserted";
 			
 		}
 		else
 		{
 			$error=mysqli_error($conn);
 			echo "error:$error";
 		}
 	}


 		function load_text($search)
 		{
 			global $conn;
 			$data="";
 			$sql="SELECT * FROM website WHERE keywords LIKE '%$search%'";
 			$result=mysqli_query($conn,$sql);
 			if($result)
 			{
 				if(mysqli_num_rows($result)>0)
 				{
 					while($rows=mysqli_fetch_array($result))
 					{
 						$keywords=$rows['keywords'];
 						$id=$rows['id'];
 						$learn_subject=$rows['learn_subject'];
 						$main_text=$rows['main_text'];
 						$s="text/$main_text";

 						$url="html/detail.php?id=$id";

 						$data.="
					<p>
							<a href='$url'>$main_text</a>
					</p>
					";
 					}
 				}
 				else
 				{
 					$data.="no subject found";
 				}

 			}
 			else
 			{
 				$data.="error";
 			}
 			echo $data;
 		}


 		// function get_detail($id)
 		// {
 		// 	global $conn;
 		// 	$data="";
 		// 	$sql="SELECT * FROM website WHERE id='$id'";
 		// 	$result=mysqli_query($conn,$sql);
 		// 	if($result)
 		// 	{
 		// 		if(mysqli_num_rows($result)>0)
 		// 		{
 		// 			while($rows=mysqli_fetch_array($result))
 		// 			{
 		// 				$keywords=$rows['keywords'];
 		// 				$id=$rows['id'];
 		// 				$learn_subject=$rows['learn_subject'];
 		// 				$main_text=$rows['main_text'];
 		// 				$s="text/$main_text";

 						

 		// 				$data.="
			// 		<p>
			// 				$main_text
			// 		</p>
			// 		";
 		// 			}
 		// 		}
 		// 		else
 		// 		{
 		// 			$data.="no subject found";
 		// 		}

 		// 	}
 		// 	else
 		// 	{
 		// 		$data.="error";
 		// 	}
 		// 	echo $data;
 		// }


 		function register($fname,$lname,$email,$psword,$pnumber,$add)
	{
		global $conn;
		$sql1="SELECT * FROM website1 WHERE email='$email'";
		$result1=mysqli_query($conn,$sql1);
		if ($result1) {
			$total=mysqli_num_rows($result1);
			if ($total>0) {
				
				echo "this email id already exists.";
			}
			else
			{
				// insert new record
				$date_time=date("Y-m-d H:i:s");
				$sql="INSERT INTO website1(fname,lname,email,password,pnumber,address)
				VALUES
				('$fname', '$lname', '$email', '$psword', '$pnumber', '$add')";
				$result=mysqli_query($conn,$sql);
				if ($result) {
					echo "new user created successfully";
				}
				else
				{
					$error=mysqli_error($conn);
					echo "error:$error";
				}
			}
		}

	}



	function login($email,$psword)
	{
					global $conn;
			$sql="SELECT * FROM website1 WHERE email='$email' AND password='$psword'";

			$result=mysqli_query($conn,$sql);

			if($result){
				$total=mysqli_num_rows($result);
				if($total>0){
					while($rows=mysqli_fetch_array($result)){
						$id=$rows['id'];
						$fname=$rows['fname'];
					
						$lname=$rows['lname'];
						$user_type=$rows['user_type'];
		
					}

					session_start();
					$_SESSION['id']=$id;
					$_SESSION['fname']=$fname;
					$_SESSION['lname']=$lname;

					if($user_type=="user"){
						$url="user_dashboard.php";
					}
					else if($user_type=="admin"){
						$url="admin_dashboard.php";
					}
					header("Location: $url");
					exit();
				}
				else{
					echo " <b>Invalid email id or password or may be account is not created yet</b>";
 				}
			}
			else{
				$error=mysqli_error($conn);
				echo "error: $error";
			}

 	}
?>   