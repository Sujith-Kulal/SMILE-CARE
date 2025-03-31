<?php 
error_reporting(0);
session_start(); 
include('db_connection.php'); // Ensure you include the database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SMILECARE DENTAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Free HTML Templates">
    <meta name="description" content="Free HTML Templates">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <header class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
                <i class="ti-align-justify"></i>
            </a>
            <a class="navbar-brand" href="#">
                <h2 style="padding-top:20%; color:#000"></h2>
            </a>
            <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
                <i class="ti-align-justify"></i>
            </a>
            <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="ti-view-grid"></i>
            </a>
        </div>

        <!-- Navbar Collapse -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- User Dropdown -->
                <li class="dropdown current-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/images/images.jpg" alt="User"> 
                        <span class="username">
                            <?php 
                            $query = mysqli_query($con, "SELECT doctorName FROM doctors WHERE id='" . $_SESSION['id'] . "'");
                            if ($row = mysqli_fetch_array($query)) {
                                echo htmlspecialchars($row['doctorName']);
                            }
                            ?>
                            <i class="ti-angle-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-dark">
                        <li><a href="change-password.php">Change Password</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Logo -->
            <div class="navbar-text">
                <h1 class="m-0 text-uppercase text-primary">Smile<span class="text-warning">Care</span></h1>
            </div>

            <!-- Mobile Menu Toggler -->
            <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                <div class="arrow-left"></div>
                <div class="arrow-right"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

</body>
</html>
