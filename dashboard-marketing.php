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
                                <h2>Marketing Dashboard</h2>
                            </div>
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index1.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                                    <li><i class="bi bi-caret-right-fill"></i></li>
                                    <li>Marketing Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-heading">
                            <h2>District Population</h2>
                        </div>
                        <div class="panel-body">
                            <div style="margin-left: auto;">
                                <div id="chartdiv2" style="width: auto;height:700px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-heading" style="display: flex; align-items: center;">
                            <div style="flex-grow: 1;">
                                <h2 style="margin: 0;">Product Marketing price</h2>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="total-transiction">
                                <div class="total-transiction">
                                    <div id="container" style="height: 690px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="panel mb-g">
                                <div class="panel-heading">
                                    <h3>District Managers</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="users">
                                        <ul>
                                            <li>
                                                <div class="user">
                                                    <div class="img">
                                                        <img src="../assets/images/ds-manager/bill.jpeg" alt="user" title="Jaffna District Manager">
                                                    </div>
                                                    <div class="txt">
                                                        <span class="name">Billgates</span>
                                                        <span>Jaffna</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user">
                                                    <div class="img">
                                                        <img src="../assets/images/ds-manager/sundar.jpg" alt="user" title="Vavuniya District Manager">
                                                    </div>
                                                    <div class="txt">
                                                        <span class="name">Sundar Pichai</span>
                                                        <span>Vavuniya</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user">
                                                    <div class="img">
                                                        <img src="../assets/images/ds-manager/mark.jpeg" alt="user" title="Mullaitheevu District Manager">
                                                    </div>
                                                    <div class="txt">
                                                        <span class="name">Mark Elliot Zuckerberg</span>
                                                        <span>Mullaitheevu</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user">
                                                    <div class="img">
                                                        <img src="../assets/images/ds-manager/steeve.jpeg" alt="user" title="Mannar District Manager">
                                                    </div>
                                                    <div class="txt">
                                                        <span class="name">Steve Jobs</span>
                                                        <span>Mannar</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user">
                                                    <div class="img">
                                                        <img src="../assets/images/ds-manager/elan.jpeg" alt="user" title="Killinochchi District Manager">
                                                    </div>
                                                    <div class="txt">
                                                        <span class="name">Elon Musk</span>
                                                        <span>Killinochchi</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="panel mb-g">
                                <div class="panel-heading">
                                    <h3>Managers Activities</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="social-activity">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">District</th>
                                                        <th scope="col">Manager Name</th>
                                                        <th scope="col">Target</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Jaffna</td>
                                                        <td>Billgates</td>
                                                        <td>155000000</td>
                                                        <td><span class="badge bg-success">Achieved</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Vavuniya</td>
                                                        <td>Sundar Pichai</td>
                                                        <td>174000000</td>
                                                        <td><span class="badge bg-success">Achieved</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Mullaitheevu</td>
                                                        <td>Mark Elliot Zuckerberg</td>
                                                        <td>100000000</td>
                                                        <td><span class="badge bg-danger">On going</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Mannar</td>
                                                        <td>Steve Job</td>
                                                        <td>125000000</td>
                                                        <td><span class="badge bg-danger">On going</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Killinochchi</td>
                                                        <td>Elan Musk</td>
                                                        <td>256000000</td>
                                                        <td><span class="badge bg-success">Achieved</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="panel mb-g">
                                <div class="panel-heading" style="display: flex; align-items: center;">
                                    <div style="flex-grow: 1;">
                                        <h2 style="margin: 0;">Marketing product status</h2>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <select id="productSelect1">
                                            <option value="Nangrow" selected>Nangrow</option>
                                            <option value="Lactogrow Comfopro">Lactogrow Comfopro</option>
                                            <option value="Ceregrow">Ceregrow</option>
                                            <option value="Nespray">Nespray</option>
                                            <option value="Milo">Milo</option>
                                            <option value="Maggi">Maggi</option>
                                            <option value="Nescafe">Nescafe</option>
                                            <option value="Milkmaid">Milkmaid</option>
                                            <option value="Nestomalt">Nestomalt</option>
                                            <option value="Breakfast cereals">Breakfast cereals</option>
                                            <option value="KitKat">KitKat</option>
                                        </select>
                                        <select id="yearSelect1">
                                            <option value="2018" selected>2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="total-transiction">
                                        <canvas id="grouped-bar-chart" style="max-width: 1800px;width: 700px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="panel mb-g">
                                <div class="panel-heading" style="display: flex; align-items: center;">
                                    <div style="flex-grow: 1;">
                                        <h2 style="margin: 0;">Marketing districts status</h2>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <select id="productSelect">
                                            <option value="Nangrow" selected>Jaffna</option>
                                            <option value="Lactogrow Comfopro">Vavuniya</option>
                                            <option value="Ceregrow">Mannar</option>
                                            <option value="Nespray">Mullaitheevu</option>
                                            <option value="Milo">Killinochchi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="total-transiction">
                                        <table border="1" style="width: 100%;">
                                            <tr>
                                                <thead>
                                                    <th style="text-align: center; width: 30%; border: 1px solid;">Details</th>
                                                    <th style="text-align: center; border: 1px solid;">Map</th>
                                                </thead>
                                            </tr>
                                            <tr>
                                                <tbody>
                                                    <td style="padding: 80px;">
                                                        <input type="radio" id="Shopping Malls" name="retailType" onclick="showMap('shopping-mall-map')">
                                                        <label for="Shopping Malls">Shopping Malls</label>
                                                        <br>
                                                        <input type="radio" id="Grocery Shops" name="retailType" onclick="showMap('grocery-shop-map')">
                                                        <label for="Grocery Shops">Grocery Shops</label>
                                                        <br>
                                                        <input type="radio" id="Retail Stores" name="retailType" onclick="showMap('retail-store-map')">
                                                        <label for="Retail Stores">Retail Stores</label>
                                                    </td>
                                                    <td>
                                                        <div id="map"></div>
                                                    </td>
                                                </tbody>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="panel mb-g">
                                <div class="slider">
                                    <img src="../assets/images/Products/partners/1.jpg" height="200px" alt="Image 1">
                                    <img src="../assets/images/Products/partners/2.jpg" alt="Image 2">
                                    <img src="../assets/images/Products/partners/3.jpg" alt="Image 3">
                                    <img src="../assets/images/Products/partners/4.jpg" alt="Image 4">
                                    <img src="../assets/images/Products/partners/5.jpg" alt="Image 5">
                                    <img src="../assets/images/Products/partners/6.jpg" alt="Image 6">
                                    <img src="../assets/images/Products/partners/7.jpg" alt="Image 7">
                                    <img src="../assets/images/Products/partners/8.jpg" alt="Image 8">
                                    <img src="../assets/images/Products/partners/9.jpg" alt="Image 9">
                                    <img src="../assets/images/Products/partners/10.jpg" alt="Image 10">
                                    <img src="../assets/images/Products/partners/11.jpg" alt="Image 11">
                                    <img src="../assets/images/Products/partners/12.jpg" alt="Image 12">
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- main-content -->
            </div>


            <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.stock.min.js"></script>
            <script src="../assets/vendor/js/jquery-3.6.0.min.js"></script>
            <script src="../assets/vendor/js/simplebar.min.js"></script>
            <script src="../assets/vendor/js/apexcharts.js"></script>
            <script src="../assets/vendor/js/dragula.min.js"></script>
            <script src="../assets/vendor/js/bs-dropzone.min.js"></script>
            <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
            <script src="../assets/js/main.js"></script>
            <!--<script src="../assets/js/marketing-page-chart.js"></script>-->

            <script src="../assets/js/chart/chartC.js"></script>

            <!-- Resources for market range in district-->
            <script src="../assets/js/chart/chartE.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

            <!-- Code for map visible -->
            <script src="../assets/js/merge-gmap.js"></script>

            <!--Population chart-->
            <script src="../assets/js/chart/chartF.js"></script>
            <!-- Include ECharts library -->
            <script src="https://cdn.jsdelivr.net/npm/echarts@5.2.1/dist/echarts.min.js"></script>

            <!-- Product market price -->
            <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
            <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
            <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
            <script src="https://cdn.anychart.com/releases/v8/js/anychart-stock.min.js"></script>
            <script src="../assets/js/chart/market-analyze/chartcode.js"></script>
            <script src="../assets/js/chart/market-analyze/csco-daily-short.js"></script>
            <script src="../assets/js/chart/market-analyze/ibm-daily-short.js"></script>
            <script src="../assets/js/chart/market-analyze/msft-daily-short.js"></script>
            <script src="../assets/js/chart/market-analyze/orcl-daily-short.js"></script>

            <!--Code for population-->
            <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
            <script src="../assets/js/chart/racebar.js"></script>

            <!-- Code for scroll chart -->
            <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
            <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
            <script src="../assets/js/chart/scroll-chart.js"></script>

            <!-- Image animating -->
            <script src="../assets/js/animat-js.js"></script>

            <!-- Code for group chart for marketing status -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="../assets/js/chart/market-status.js"></script>

            <link href=" https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
            <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
</body>

</html>