<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	// Check if empty

	if (empty($email) || empty($password)) {
		header("Location: ../login.php?login=empty");
		exit();
	}
	else{
		$sql = "SELECT * from user WHERE email = '$email'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
				header("Location: ../login.php?login=invalid");
				exit();
			}
			else{

			if ($row = mysqli_fetch_assoc($result)) {
				//Dehashing the password
				$hashedPwdCheck = password_verify($password, $row['password']);
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=invalid");
					exit();
				}
				elseif ($hashedPwdCheck == true) {
					//Login the user
					$_SESSION['curr_id'] = $row['id'];
					$_SESSION['curr_fname'] = $row['fname'];
					$_SESSION['curr_lname'] = $row['lname'];
					$_SESSION['curr_email'] = $row['email'];
					header("Location: ../index.php?login=success");
					exit();
				}

			
			}
		}
	}
}
else{
	header("Location: ../register.php");
	exit();
}
