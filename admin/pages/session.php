<?php
	session_start();


	if(isset($_POST['submit'])){
		$username = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE email = '$email'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the email';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['admin'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('Location: anasayfa.php');

?>