<?php
session_start();

include_once('config.php');

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	if (empty($name) || empty($email) || empty($subject)) {

		echo "Please fill in all fields
			";
	} else {

		$sql = "INSERT INTO contact(name,email,subject,messages) VALUES (:name, :email, :subject, :message)";

		$insertSql = $conn->prepare($sql);


		$insertSql->bindParam(':name', $name);
		$insertSql->bindParam(':email', $email);
		$insertSql->bindParam(':subject', $subject);
		$insertSql->bindParam(':message', $message);

		$insertSql->execute();

		header("Location: savetheworld/index.php");
	}
}
