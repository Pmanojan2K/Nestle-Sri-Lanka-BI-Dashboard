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
                                <h2>Sales Dashboard</h2>
                            </div>
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index1.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                                    <li><i class="bi bi-caret-right-fill"></i></li>
                                    <li>Sales Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="panel mb-g">
                        <div class="panel-body">
                            <div class="sale-top-box">
                                <div class="part-icon bg-primary">
                                    <span><i class="bi bi-graph-up-arrow"></i></span>
                                </div>
                                <div class="part-txt">
                                    <h5><span>Total Sales</span> 55,684</h5>
                                    <p>in Nothern Province</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="panel mb-g">
                        <div class="panel-body">
                            <div class="sale-top-box">
                                <div class="part-icon bg-success">
                                    <span><i class="bi bi-boxes"></i></span>
                                </div>
                                <div class="part-txt">
                                    <h5><span>Total Product</span> 84,575</h5>
                                    <p>in Nothern Province</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="panel mb-g">
                        <div class="panel-body">
                            <div class="sale-top-box">
                                <div class="part-icon bg-danger">
                                    <span><i class="bi bi-cash-coin"></i></span>
                                </div>
                                <div class="part-txt">
                                    <h5><span>Total Earnings</span> 168,846</h5>
                                    <p>in Nothern Province</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="panel mb-g">
                        <div class="panel-body">
                            <div class="sale-top-box">
                                <div class="part-icon bg-info">
                                    <span><i class="bi bi-chat-square-dots"></i></span>
                                </div>
                                <div class="part-txt">
                                    <h5><span>Customer reviews</span> 232,854</h5>
                                    <p>in Nothern Province</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales in year start-->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-heading" style="display: flex; align-items: center;">
                            <div style="flex-grow: 1;">
                                <h2 style="margin: 0;">Yearly District sales target and achieve</h2>
                            </div>
                            <div style="margin-left: auto;">
                                <select id="productSelect" onchange="updateChart()">
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
                            </div>
                        </div>
                        <div class="panel-body">
                            <h3 id="productTitle">Nangrow</h3>
                            <canvas id="chart1" width="auto"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales in year end-->

            <!-- Sales in months start-->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-heading" style="display: flex; align-items: center;">
                            <div style="flex-grow: 1;">
                                <h2 style="margin: 0;">Monthly District sales achieve</h2>
                            </div>
                            <div style="margin-left: auto;">
                                <select id="districtSelect">
                                    <option value="Jaffna" selected>Jaffna</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Killinochchi">Killinochchi</option>
                                    <option value="Mullaitheevu">Mullaitheevu</option>
                                </select>
                                <select id="yearSelect">
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023" selected>2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="total-transiction">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales in months end-->

            <!--Sales details start-->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-heading" style="display: flex; align-items: center;">
                            <div style="flex-grow: 1;">
                                <h2 style="margin: 0;">Products sales in district</h2>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="chartdiv1" style="width: auto; height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sales details end-->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-heading" style="display: flex; align-items: center;">
                            <h2> Sales Product Status</h2>
                        </div>
                        <div class="panel-body">
                            <div class="product-status">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Brand</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Ava Product</th>
                                                <th scope="col">Availablity</th>
                                                <th scope="col">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Ceregrow">
                                                        <img src="../assets/images/image-nes/products/ceregrow.png" alt="ceregrow">
                                                    </a>
                                                </td>
                                                <td>Ceregrow</td>
                                                <td>2</td>
                                                <td><span class="text-success"><i class="bi bi-check-circle-fill"></i></span> In Stock</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Lactagrow Comfopro">
                                                        <img src="../assets/images/image-nes/products/lactagrow.jpg" alt="lactagrow">
                                                    </a>
                                                </td>
                                                <td>Lactagrow Comfopro</td>
                                                <td>2</td>
                                                <td><span class="text-success"><i class="bi bi-check-circle-fill"></i></span> In Stock</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Maggi">
                                                        <img src="../assets/images/image-nes/products/maagi.jpg" alt="product">
                                                    </a>
                                                </td>
                                                <td>Maggi</td>
                                                <td>4</td>
                                                <td><span class="text-danger"><i class="bi bi-x-circle-fill"></i></span> Sold Out</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Breakfast cereals">
                                                        <img src="../assets/images/image-nes/products/breakfast.jpg" alt="breakfast">
                                                    </a>
                                                </td>
                                                <td>Breakfast cereals</td>
                                                <td>5</td>
                                                <td><span class="text-success"><i class="bi bi-check-circle-fill"></i></span> In Stock</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="KitKat">
                                                        <img src="../assets/images/image-nes/products/kitkat.jpg" alt="kitkat">
                                                    </a>
                                                </td>
                                                <td>KitKat</td>
                                                <td>1</td>
                                                <td><span class="text-danger"><i class="bi bi-x-circle-fill"></i></span> Sold Out</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Milkmaid">
                                                        <img src="../assets/images/image-nes/products/milkmaid.png" alt="milkmaid">
                                                    </a>
                                                </td>
                                                <td>Milkmaid</td>
                                                <td>1</td>
                                                <td><span class="text-success"><i class="bi bi-check-circle-fill"></i></span> In Stock</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Milo">
                                                        <img src="../assets/images/image-nes/products/milo.png" alt="milo">
                                                    </a>
                                                </td>
                                                <td>Milo</td>
                                                <td>2</td>
                                                <td><span class="text-success"><i class="bi bi-check-circle-fill"></i></span> In Stock</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Nangrow">
                                                        <img src="../assets/images/image-nes/products/nangrow.jpg" alt="nangrow">
                                                    </a>
                                                </td>
                                                <td>Nangrow</td>
                                                <td>2</td>
                                                <td><span class="text-success"><i class="bi bi-check-circle-fill"></i></span> In Stock</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Nescafe">
                                                        <img src="../assets/images/image-nes/products/nescafe.jpg" alt="nescafe">
                                                    </a>
                                                </td>
                                                <td>Nescafe</td>
                                                <td>4</td>
                                                <td><span class="text-danger"><i class="bi bi-x-circle-fill"></i></span> Sold Out</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Nespray">
                                                        <img src="../assets/images/image-nes/products/nespray.jpg" alt="nespray">
                                                    </a>
                                                </td>
                                                <td>Nespray</td>
                                                <td>2</td>
                                                <td><span class="text-success"><i class="bi bi-check-circle-fill"></i></span> In Stock</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" tabindex="0" title="Nestomalt">
                                                        <img src="../assets/images/image-nes/products/nestomalt.jpg" alt="nestomalt">
                                                    </a>
                                                </td>
                                                <td>Nestomalt</td>
                                                <td>6</td>
                                                <td><span class="text-success"><i class="bi bi-check-circle-fill"></i></span> In Stock</td>
                                                <td>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/pen.png" style="width:30px;height:30px;">
                                                    </button>
                                                    <button class="edit-button" style="border-radius: 40px; border: 2px solid black;">
                                                        <img src="../assets/images/icons/save.png" style="width:30px;height:30px;">
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel mb-g">
                <div class="panel-heading">
                    <h2>Manager sales status</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item carousel-item-next carousel-item-start active">
                                        <a href="manager-details.php">
                                            <img src="../assets/images/ds-manager/bill.jpeg" class="d-block w-100" alt="slide image" style="width: 700px; height: 300px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <a href="manager-details.php">
                                                    <h5>Bill Gates</h5>
                                                    <p>Jaffna District Manager</p>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="manager-details.php">
                                            <img src="../assets/images/ds-manager/sundar.jpg" class="d-block w-100" alt="slide image" style="width: 700px; height: 300px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <a href="manager-details.php">
                                                    <h5>Sundar Pichai</h5>
                                                    <p>Vavuniya District Manager</p>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="carousel-item carousel-item-start">
                                        <a href="manager-details.php">
                                            <img src="../assets/images/ds-manager/steeve.jpg" class="d-block w-100" alt="slide image" style="width: 700px; height: 300px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <a href="manager-details.php">
                                                    <h5>Steve Jobs</h5>
                                                    <p>Mannar District Manager</p>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="manager-details.php">
                                            <img src="../assets/images/ds-manager/elan.jpeg" class="d-block w-100" alt="slide image" style="width: 700px; height: 300px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <a href="manager-details.php">
                                                    <h5>Elon Musk</h5>
                                                    <p>Killinochchi District Manager</p>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="carousel-item carousel-item-start">
                                        <a href="manager-details.php">
                                            <img src="../assets/images/ds-manager/mark.jpeg" class="d-block w-100" alt="slide image" style="width: 700px; height: 300px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <a href="manager-details.php">
                                                    <h5>Mark Zuckerberg</h5>
                                                    <p>Mullaitheevu District Manager</p>
                                                </a>
                                            </div>
                                        </a>
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
                        <div class="col-xl-8 col-lg-6">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Year</th>
                                        <th>Expenses (LKR)</th>
                                        <th>Achieved Target (LKR)</th>
                                        <th>Target (LKR)</th>
                                        <th>Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2018</td>
                                        <td>20,000,000</td>
                                        <td>10,000,000</td>
                                        <td>25,000,000</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>2019</td>
                                        <td>20,000,000</td>
                                        <td>10,000,000</td>
                                        <td>25,000,000</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>2020</td>
                                        <td>20,000,000</td>
                                        <td>10,000,000</td>
                                        <td>25,000,000</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>2021</td>
                                        <td>20,000,000</td>
                                        <td>10,000,000</td>
                                        <td>25,000,000</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>2022</td>
                                        <td>20,000,000</td>
                                        <td>10,000,000</td>
                                        <td>25,000,000</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>2023</td>
                                        <td>20,000,000</td>
                                        <td>10,000,000</td>
                                        <td>25,000,000</td>
                                        <td>50%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-heading" style="display: flex; align-items: center;">
                            <h2>Sales Partners</h2>
                        </div>
                        <div class="panel-body">
                            <div class="product-status">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sales ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Ditrict</th>
                                                <th scope="col">No of Total Purchase</th>
                                                <th scope="col"> Allocated Sales Limit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Establish database connection
                                            $host = 'localhost';
                                            $username = 'root';
                                            $password = 'root';
                                            $database = 'bi_assignment';

                                            $connection = mysqli_connect($host, $username, $password, $database);

                                            // Check if the connection was successful
                                            if (!$connection) {
                                                die('Database connection error: ' . mysqli_connect_error());
                                            }

                                            // Fetch data from the "sales_partners_info" table
                                            $query = "SELECT Sales_ID, Name, District, No_of_Total_Purchase, Allocated_Sales_Limit FROM sales_partners_info";
                                            $result = mysqli_query($connection, $query);

                                            // Loop through the result set and populate the table rows
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                echo '<td>' . $row['Sales_ID'] . '</td>';
                                                echo '<td>' . $row['Name'] . '</td>';
                                                echo '<td>' . $row['District'] . '</td>';
                                                echo '<td>' . $row['No_of_Total_Purchase'] . '</td>';
                                                echo '<td>' . $row['Allocated_Sales_Limit'] . '</td>';
                                                echo '</tr>';
                                            }

                                            echo '</tbody>';
                                            echo '</table>';

                                            // Close the database connection
                                            mysqli_close($connection);
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="../assets/js/chart/chartB.js"></script>


    <!-- sales chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../assets/js/chart/group/chart1.js"></script>

    <script src="../assets/js/chart/group/chart2.js"></script>

</body>

</html>