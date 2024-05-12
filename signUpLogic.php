
<?php

include_once('config.php');

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$tempPass = $_POST['password'];
	$password = password_hash($tempPass, PASSWORD_DEFAULT);

	if (empty($name) || empty($lastname) || empty($email) || empty($password)) {
		echo "You have not filled in all the fields.";
	} else {

		$sql = "INSERT INTO users(name,lastname,email,creditcard,password) VALUES (:name, :lastname, :email, :creditcard, :password)";

		$insertSql = $conn->prepare($sql);

		$insertSql->bindParam(':name', $name);
		$insertSql->bindParam(':lastname', $lastname);
		$insertSql->bindParam(':email', $email);
		$insertSql->bindParam(':password', $password);

		function generateCreditCardNumber()
		{
			$creditCardNumber = '';
			for ($i = 0; $i < 16; $i++) {
				$creditCardNumber .= mt_rand(0, 9);
			}
			return $creditCardNumber;
		}
		$randomCreditCardNumber = generateCreditCardNumber();

		$insertSql->bindParam(':creditcard', $randomCreditCardNumber);

		$insertSql->execute();

		header("Location: signup.php");
	}
}


?>