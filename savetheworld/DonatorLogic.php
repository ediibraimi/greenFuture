<?php
session_start();

include_once('../config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['DonatorName'];
    $email = $_POST['DonatorEmail'];
    $CC = $_POST['DonatorCreditCard'];
    $PN = $_POST['DonatorPhoneNum'];
    $price = $_POST['DonatorPrice'];
    $option = $_POST['DonatorOption'];

    $sql = "INSERT INTO Donator(DonatorName,DonatorEmail,DonatorCreditCard,DonatorPhoneNum, DonatorPrice, DonatorOption) VALUES (:DonatorName, :DonatorEmail, :DonatorCreditCard, :DonatorPhoneNum,:DonatorPrice,:DonatorOption)";

    $insertSql = $conn->prepare($sql);


    $insertSql->bindParam(':DonatorName', $name);
    $insertSql->bindParam(':DonatorEmail', $email);
    $insertSql->bindParam(':DonatorCreditCard', $CC);
    $insertSql->bindParam(':DonatorPhoneNum', $PN);
    $insertSql->bindParam(':DonatorPrice', $price);
    $insertSql->bindParam(':DonatorOption', $option);


    $insertSql->execute();

    header("Location: index.php");
}?>