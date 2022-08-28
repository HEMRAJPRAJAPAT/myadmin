<?php
session_start();

if (isset($_POST['logout'])){

    session_destroy();

    ?>
    <script>
        window.location.href = "login.php";
    </script>
    <?php
} 

?>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" style="border-bottom: 1px solid #fff;">
    <a class="navbar-brand ps-3 brand_text" href="clinic_management.php">SenerK</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"> 
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <form action="" method="post"><li><button class="dropdown-item" name="logout">Logout</button></li></form>
            </ul>
        </li>
    </ul>
</nav>
