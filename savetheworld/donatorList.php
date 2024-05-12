<?php
session_start();

include_once('../config.php');

if (empty($_SESSION['name'])) {
    header("Location: login.php");
}

if ($_SESSION['is_admin'] != 'true') {
    header("Location: index.php");
}


$totalDonated  = "SELECT sum(DonatorPrice) as total_donated FROM donator";
$selectTotalDonated = $conn->prepare($totalDonated);
$selectTotalDonated->execute();
$total_donated = $selectTotalDonated->fetch();

$sql = "SELECT * FROM donator";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();
$users_data = $selectUsers->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .red-button:hover {
            color: white !important;
        }
    </style>
</head>

<body class="" style="background-color: #e1e1e1">

    <nav class="navbar navbar-expand-lg bg-green shadow" style="color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <?php echo "Welcome " . $_SESSION['name']; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Users Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactList.php">Contact Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donatorList.php">Donator Page</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="logout.php">
                        <button class="btn btn-outline-dark">Logout
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="d-flex justify-content-center align-items-center py-3 mb-3 border-bottom">
            <h1 class="text-green"> Admin Dashboard</h1>
        </div>

        <div class="container" style="width: 90%;">
            <h2 class="text-green">Donators</h2>
            <h5 class="text-green">Total Donated: $<?php echo $total_donated['total_donated']; ?> </h5>
            <table class=" table table-striped table-sm shadow">
                <thead class="bg-dark text-white">
                    <tr>
                        <th class="bg-green text-dark ps-3">Id</th>
                        <th class="bg-green text-dark ps-3">Donator Name</th>
                        <th class="bg-green text-dark ps-3">Donator Email</th>
                        <th class="bg-green text-dark ps-3">Donator Credit Card</th>
                        <th class="bg-green text-dark ps-3">Donator Phone Number</th>
                        <th class="bg-green text-dark ps-3">Donator Price</th>
                        <th class="bg-green text-dark ps-3">Donator Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users_data as $user_data) { ?>
                        <tr>
                            <td class="bg-light ps-3"> <?php echo $user_data['id']; ?> </td>
                            <td class="bg-light ps-3"> <?php echo $user_data['DonatorName']; ?> </td>
                            <td class="bg-light ps-3"> <?php echo $user_data['DonatorEmail']; ?> </td>
                            <td class="bg-light ps-3"> <?php echo $user_data['DonatorCreditCard']; ?> </td>
                            <td class="bg-light ps-3"> <?php echo $user_data['DonatorPhoneNum']; ?> </td>
                            <td class="bg-light ps-3"> <?php echo $user_data['DonatorPrice']; ?> </td>
                            <td class="bg-light ps-3"> <?php echo $user_data['DonatorOption']; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>



    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>