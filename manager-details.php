<?php

session_start();

if (!isset($_SESSION['authenticated'])) {
    // Redirect the user to the login page if not authenticated
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nestle Sri Lanka</title>

    <link rel="shortcut icon" href="../assets/images/image-nes/logo-small.png">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/vendor/css/simplebar.css">
    <link rel="stylesheet" href="../assets/vendor/css/bootstrap.min.css">
    <link id="styles" rel="stylesheet" href="../assets/css/style.css">

    <!--Script for chart-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
</head>

<body>
    <div class="container-fluid">

        <!-- header -->
        <div class="header">
            <div class="top-header">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-sm-4 col-6">
                        <div class="d-flex align-items-center">
                            <div class="logo">
                                <div class="logo-big" style="display: flex; justify-content: center; align-items: center;">
                                    <a href="index1.php">
                                        <img src="../assets/images/image-nes/nestle-logo2.png" id="logoBig" alt="Logo big" style="height: 33px;">
                                    </a>
                                </div>
                                <div class="logo-small">
                                    <a href="index1.php">
                                        <img src="../assets/images/image-nes/nestle-logo4.png" id="logoSmall" alt="Logo small">
                                    </a>
                                </div>
                            </div>
                            <button class="sidebar-collapse">
                                <i class="bi bi-list"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-sm-8 col-6">
                        <div class="top-right">
                            <nav class="navbar navbar-expand">
                                <div class="navbar-collapse" id="navbarSupportedContent">
                                    <form class="nav-form d-flex">
                                        <input type="search" placeholder="Search" aria-label="Search">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </form>
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <button class="message-dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-bell-fill"></i>
                                                <span class="position-absolute p-1 bg-danger border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </button>
                                            <ul class="dropdown-menu notification-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a href="#" class="like"><i class="bi bi-heart-fill"></i> Shaikh Darda likes your post</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="comment"><i class="bi bi-chat-left-text-fill"></i> 5 New comments on your post</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="update"><i class="bi bi-gear-wide-connected"></i> 1 Details updated</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-center">Show all notification</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <button class="message-dropdown" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-chat-text-fill"></i>
                                                <span class="position-absolute p-1 bg-danger border border-light rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </button>
                                            <ul class="dropdown-menu message-dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li>
                                                    <a href="#">
                                                        <img src="../assets/images/ds-manager/sundar.jpg" alt="image">
                                                        <div class="txt">
                                                            <span>Sundar Pichai</span>
                                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit Autem.</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="../assets/images/ds-manager/steeve.jpg" alt="image">
                                                        <div class="txt">
                                                            <span>Steve Jones</span>
                                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit Autem.</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="../assets/images/ds-manager/elan.jpeg" alt="image">
                                                        <div class="txt">
                                                            <span>Elon Musk</span>
                                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit Autem.</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="justify-content-center">Show all messages</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <button class="profile-dropdown" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="../assets/images/image-nes/sup-admin.png" alt="user">
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                <li><a class="dropdown-item" href="index1.php"><i class="bi bi-person-badge-fill"></i>Profile</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-envelope-fill"></i>Inbox</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-list-task"></i>Tasks</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="pass-settings.php"><i class="bi bi-gear-fill"></i>Settings</a></li>
                                                <li><a class="dropdown-item" href="lock/lock-screen.php?id=Nes%2FADM%2F001"><i class="bi bi-shield-lock-fill"></i>Lock screen</a></li>
                                                <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right"></i>Sign out</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="horizontal-menu bg-primary">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dashboardDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            Dashboard
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="index1.php" class="sub-menu-item">Sales Dashboard</a></li>
                                            <li><a href="dashboard-marketing.php" class="sub-menu-item">Marketing Dashboard</a></li>
                                            <li><a href="dashboard-service.php" class="sub-menu-item">Service Dashboard</a></li>
                                            <li><a href="dashboard-finance.php" class="sub-menu-item">Customer Analysis Dashboard</a></li>
                                            <li><a href="dashboard-it.php" class="sub-menu-item">HR Dashboard</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="ecommerceDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            Ecommerce
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="ecommerceDropdown">
                                            <li><a href="manager-details.php" class="sub-menu-item">Staff</a></li>
                                            <li><a href="promotion-manager.php" class="sub-menu-item">Promotion</a></li>
                                            <li style="display: none;"><a href="staff-form.php" class="sub-menu-item">Edit</a></li>
                                            <li><a href="ecommerce-product.php" class="sub-menu-item">Products</a></li>
                                            <li><a href="product-stock.php" class="sub-menu-item">Stock</a></li>
                                            <li><a href="order-analysis.php" class="sub-menu-item">Orders</a></li>
                                            <li><a href="customer-analysis.php" class="sub-menu-item">Customers</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- header -->

        <!-- main sidebar -->
        <div class="fixed-sidebar sidebar-mini" data-simplebar>
            <div class="profile">
                <div class="sidebar-profile">
                    <button id="profileClose"><i class="bi bi-x-circle-fill"></i></button>
                    <div class="part-img">
                        <img src="../assets/images/image-nes/sup-admin.png" alt="admin">
                    </div>
                    <div class="part-txt">
                        <a href="#" class="name">Pemaraj Manojan</a>
                        <span>Province Manager</span>
                        <ul>
                            <li><a href="edit-password.php" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Settings"><i class="bi bi-gear-fill"></i></a></li>
                            <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Chat"><i class="bi bi-chat-dots-fill"></i></a></li>
                            <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Follower"><i class="bi bi-person-plus-fill"></i></a></li>
                            <li><a href="logout.php" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Log out"><i class="bi bi-power"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- sidebar menu -->
            <div class="menu">
                <div class="sidebar-menu">
                    <ul>
                        <li class="sidebar-title"><span>Menu</span></li>
                        <li class="sidebar-item has-sub">
                            <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" tabindex="0"><i class="bi bi-grid-fill"></i> <span>Dashboard</span></a>
                            <ul class="sub-menu">
                                <li><a href="index1.php" class="sub-menu-item">Sales Dashboard</a></li>
                                <li><a href="dashboard-marketing.php" class="sub-menu-item">Marketing Dashboard</a></li>
                                <li><a href="dashboard-service.php" class="sub-menu-item">Service Dashboard</a></li>
                                <li><a href="dashboard-finance.php" class="sub-menu-item">Customer Analysis Dashboard</a></li>
                                <li><a href="dashboard-it.php" class="sub-menu-item">HR Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Ecommerce" tabindex="0"><i class="bi bi-basket2-fill"></i> <span>Ecommerce</span></a>
                            <ul class="sub-menu">
                                <li><a href="manager-details.php" class="sub-menu-item">Staff</a></li>
                                <li><a href="promotion-manager.php" class="sub-menu-item">Promotion</a></li>
                                <li style="display: none;"><a href="staff-form.php" class="sub-menu-item">Edit</a></li>
                                <li><a href="ecommerce-product.php" class="sub-menu-item">Products</a></li>
                                <li><a href="product-stock.php" class="sub-menu-item">Stock</a></li>
                                <li><a href="order-analysis.php" class="sub-menu-item">Orders</a></li>
                                <li><a href="customer-analysis.php" class="sub-menu-item">Customers</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a role="button" class="sidebar-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Components" tabindex="0"><i class="bi bi-gear"></i> <span>Settings</span></a>
                            <ul class="sub-menu">
                                <li><a href="staff-form.php" class="sub-menu-item">Edit</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- sidebar menu -->
        </div>
        <!-- main sidebar -->

        <!-- main-content -->
        <div class="main-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap mb-g">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h2>Staff</h2>
                            </div>
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index1.php"><i class="bi bi-basket2-fill"></i></i> E-Commerce</a></li>
                                    <li><i class="bi bi-caret-right-fill"></i></li>
                                    <li>Staff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Manager details start-->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-heading" style="display: flex; align-items: center;">
                            <div style="flex-grow: 1;">
                                <h2 style="margin: 0;">Manager details in district</h2>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item carousel-item-next carousel-item-start active">
                                                <img src="../assets/images/ds-manager/bill.jpeg" class="d-block w-100" alt="slide image" style="width: 900px; height: 500px;">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Bill Gates</h5>
                                                    <p>Jaffna District Manager</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../assets/images/ds-manager/sundar.jpg" class="d-block w-100" alt="slide image" style="width: 900px; height: 500px;">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Sundar Pichai</h5>
                                                    <p>Vavuniya District Manager</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item carousel-item-start">
                                                <img src="../assets/images/ds-manager/steeve.jpg" class="d-block w-100" alt="slide image" style="width: 900px; height: 500px;">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Steve Jobs</h5>
                                                    <p>Mannar District Manager</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../assets/images/ds-manager/elan.jpeg" class="d-block w-100" alt="slide image" style="width: 900px; height: 500px;">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Elon Musk</h5>
                                                    <p>Killinochchi District Manager</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item carousel-item-start">
                                                <img src="../assets/images/ds-manager/mark.jpeg" class="d-block w-100" alt="slide image" style="width: 900px; height: 500px;">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Mark Zuckerberg</h5>
                                                    <p>Mullaitheevu District Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <p>
                                    <table class="table table-bordered mb-0" style="width: 100%;height: 100%;">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Manager Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 40%;">Manager ID</td>
                                                <td id="managerId" name="managerId">MGR/Jaf/001</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%;">Name</td>
                                                <td id="managerName" name="managerName">Bill Gates</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%;">Join Date</td>
                                                <td id="joinDate" name="joinDate">2019-05-12</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%;">Promotion Status</td>
                                                <td id="promotionStatus" name="promotionStatus">2020-05-19</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%;">Like Status</td>
                                                <td>
                                                    <span class="rating">
                                                        <i class="bi-emoji-sunglasses-fill"></i>
                                                        <i class="bi-emoji-sunglasses-fill"></i>
                                                        <i class="bi-emoji-sunglasses-fill"></i>
                                                        <i class="bi-emoji-sunglasses-fill"></i>
                                                        <i class="bi-emoji-sunglasses-fill"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Description</td>
                                                <td><textarea name="desc" rows="3" style="width: 100%;border: none;" placeholder="Comment Here!"></textarea></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </p>
                                </div>
                            </div><br>
                            <hr style="border: 3px Sold red;"><br>
                            <div style="height:500px;">
                                <table class="table table-bordered mb-0" style="width: 100%;">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th style="width:60%;">Details</th>
                                            <th style="width:40%;">Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sales Revenue</td>
                                            <td style="text-align: center;">15240000</td>
                                        </tr>
                                        <tr>
                                            <td>Units Sold</td>
                                            <td style="text-align: center;">47802300</td>
                                        </tr>
                                        <tr>
                                            <td>Average order Value</td>
                                            <td style="text-align: center;">9850000</td>
                                        </tr>
                                        <tr>
                                            <td>Response Time to Customer Inquiries</td>
                                            <td style="text-align: center;">48750000</td>
                                        </tr>
                                        <tr>
                                            <td>Average Number of Sales per Employee</td>
                                            <td style="text-align: center;">48000000</td>
                                        </tr>
                                        <tr>
                                            <td>Customer Satisfaction</td>
                                            <td style="text-align: center;">
                                                <div class="star text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Conversion Rate</td>
                                            <td style="text-align: center;">
                                                <div class="star text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Average Handling time</td>
                                            <td style="text-align: center;">
                                                <div class="star text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>First Call Resolution Rate</td>
                                            <td style="text-align: center;">
                                                <div class="star text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Employee Satisfaction Ratings</td>
                                            <td style="text-align: center;">
                                                <div class="star text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Manager details end-->
        </div>
        <!-- main-content -->
    </div>

    <script src="../assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/vendor/js/simplebar.min.js"></script>
    <script src="../assets/vendor/js/apexcharts.js"></script>
    <script src="../assets/vendor/js/dragula.min.js"></script>
    <script src="../assets/vendor/js/bs-dropzone.min.js"></script>
    <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>

    <!--Chart for sales page-->
    <script src="../assets/js/chart/chartA1.js"></script>
    <!-- Resources of chartA-->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <script src="../assets/js/chart/chartB.js"></script>

    <!-- Code for scroll chart -->
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    <script src="../assets/js/chart/scroll-chart.js"></script>

    <!-- Race barchart -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Chart for manager details code -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <!-- Resources of chartA-->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="../assets/js/chart/chartB.js"></script>

    <!-- Table data change -->
    <script src="../assets/js/table-data-change.js"></script>

</body>

</html>