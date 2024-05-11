
<?php

include_once('config.php');

	if(isset($_POST['submit']))
	{

		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];

		$tempPass = $_POST['password'];
		$password = password_hash($tempPass, PASSWORD_DEFAULT);





		if(empty($name) || empty($lastname) || empty($email) || empty($password) || empty($phoneNumber) )
		{
			echo "You have not filled in all the fields.";
		}
		else
		{

			$sql = "INSERT INTO users(name,lastname,email,password,phoneNumber ) VALUES (:name, :lastname, :email, :password, :phoneNumber)";

			$insertSql = $conn->prepare($sql);
			

			$insertSql->bindParam(':emri', $emri);
			$insertSql->bindParam(':username', $username);
			$insertSql->bindParam(':email', $email);
			$insertSql->bindParam(':password', $password);
            $insertSql->bindParam(':phoneNumber', $phoneNumber);


			$insertSql->execute();

			header("Location: login.php");


		}



	}


?>