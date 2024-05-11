<?php 
	session_start();

	include_once('config.php');

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];

		$password = $_POST['password'];

		if (empty($name) || empty($password)) {

			echo "Please fill in all fields
			";

		}
		else{

			$sql = "SELECT id, name, lastname, email, password,phoneNumber  FROM users WHERE name=:name";

			$selectUser = $conn->prepare($sql);


			$selectUser->bindParam(":name", $name);


			$selectUser->execute();

			$data = $selectUser->fetch();

			if ($data == false) {
				

				echo "The user does not exist
				";
			}else{

				if (password_verify($password, $data['password'])) {
					$_SESSION['id'] = $data['id'];
					$_SESSION['name'] = $data['name'];
					$_SESSION['lastname'] = $data['lastname'];
					$_SESSION['email'] = $data['email'];
					$_SESSION['phoneNumber'] = $data['phoneNumber'];
                    
					header('Location: index.php');
				}
				else{
					echo "The password is not valid
					";
				}

			}

		}


	}


 ?>