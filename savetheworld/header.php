<?php session_start(); ?>

<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-tree me-3"></i>GreenFuture</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
            <?php if (isset($_SESSION[('name')])) { ?>
                <?php if ($_SESSION['is_admin'] == 'true') { ?>
                    <a href="dashboard.php" class="nav-item nav-link">Dashboard</a>
                <?php } ?>
            <?php } ?>
        </div>
        <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
        <?php if (isset($_SESSION['name'])) { ?>
            <a href="logout.php" class="btn btn-secondary py-2 px-4 ms-3">Logout</a>
        <?php } else { ?>
            <a href="../signup.php" class="btn btn-secondary py-2 px-4 ms-3">Register</a>
        <?php } ?>
    </div>
</nav>