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
                                <h2>HR Dashboard</h2>
                            </div>
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index1.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                                    <li><i class="bi bi-caret-right-fill"></i></li>
                                    <li>HR Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel mb-g">
                                <div class="panel-body">
                                    <div class="it-top-box">
                                        <p><span class="text-success"><i class="bi bi-list-task"></i></span> Total Tasks</p>
                                        <h3>5745</h3>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="bottom-txt">
                                            <h6>Weekly<span>5</span></h6>
                                            <h6>Monthly<span>37</span></h6>
                                            <h6>Total<span>42</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel mb-g">
                                <div class="panel-body">
                                    <div class="it-top-box">
                                        <p><span class="text-danger"><i class="bi bi-people"></i></span> Total Employees</p>
                                        <h3>118</h3>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="bottom-txt">
                                            <h6>Male<span>54</span></h6>
                                            <h6>Female<span>64</span></h6>
                                            <h6>Total<span>118</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel mb-g">
                                <div class="panel-body">
                                    <div class="it-top-box">
                                        <p><span class="text-info"><i class="bi bi-file-earmark-text"></i></span> Total Projects</p>
                                        <h3>1487</h3>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="bottom-txt">
                                            <h6>Weekly<span>15</span></h6>
                                            <h6>Monthly<span>69</span></h6>
                                            <h6>Total<span>84</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel mb-g">
                                <div class="panel-body">
                                    <div class="it-top-box">
                                        <p><span class="text-warning"><i class="bi bi-file-earmark-check"></i></span> Ongoing Projects</p>
                                        <h3>2564</h3>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="bottom-txt">
                                            <h6>Weekly<span>8</span></h6>
                                            <h6>Monthly<span>35</span></h6>
                                            <h6>Total<span>43</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="panel mb-g">
                        <div class="panel-heading">
                            <h3>Project Budget</h3>
                        </div>
                        <div class="panel-body">
                            <div id="projectBudget"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="panel mb-g">
                        <div class="panel-heading">
                            <h3>Yearly Current Budget</h3>
                        </div>
                        <div class="panel-body">
                            <div class="current-budget">
                                <h4>LKR 1,647,844</h4>
                                <p>Analyzing and optimizing yearly budget to drive financial stability and growth efficiently.</p>
                                <div id="CurrentBudget"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="panel mb-g">
                        <div class="panel-heading">
                            <h3>Work Activity</h3>
                        </div>
                        <div class="panel-body">
                            <div class="work-activity">
                                <div class="progress-box mb-20">
                                    <h6>4826<span>Complete Projects</span></h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box mb-20">
                                    <h6>6912<span>Pending Projects</span></h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box mb-20">
                                    <h6>5891<span>Future Projects</span></h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div id="WorkActivity"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="panel mb-g">
                        <div class="panel-heading">
                            <h3>Developing Team</h3>
                        </div>
                        <div class="panel-body">
                            <div class="developing-team">
                                <div class="team-members">
                                    <img src="../assets/images/ds-manager/bill.jpeg" alt="Jaffna Team" style="width: 60px;height: 60px;">
                                    <img src="../assets/images/ds-manager/sundar.jpg" alt="Vavuniya Team" style="width: 60px;height: 60px;">
                                    <img src="../assets/images/ds-manager/steeve.jpg" alt="Mannar Team" style="width: 60px;height: 60px;">
                                    <img src="../assets/images/ds-manager/elan.jpeg" alt="Killinochchji Team" style="width: 60px;height: 60px;">
                                    <img src="../assets/images/ds-manager/mark.jpeg" alt="Mullaitheevu Team" style="width: 60px;height: 60px;">
                                </div>
                                <div class="part-txt">
                                    <h6>About Developing Team</h6>
                                    <p style="text-align: justify;">
                                        Nestle Sri Lanka's dedicated development team strategically manages budgets, ensuring optimal allocation of resources to drive growth, innovation, and sustainable success in the dynamic food and beverage industry.
                                    </p>
                                    <div class="progress-box mb-20">
                                        <span>Status of current project: 75%</span>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="bottom-txt">
                                        <h5>Projects<span>15</span></h5>
                                        <h5>Ranking<span>2nd</span></h5>
                                        <h5>Budget<span>36,492,649</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-body">
                            <div class="row g-0 gy-4">
                                <div class="col-md-3 col-6">
                                    <div class="it-status">
                                        <p>Development</p>
                                        <h2 class="text-primary">87%</h2>
                                        <span>Completed</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="it-status">
                                        <p>Planning</p>
                                        <h2 class="text-success">46%</h2>
                                        <span>Completed</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="it-status">
                                        <p>Testing</p>
                                        <h2 class="text-danger">78%</h2>
                                        <span>Completed</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="it-status">
                                        <p>Manufacturing</p>
                                        <h2 class="text-warning">35%</h2>
                                        <span>Completed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="panel mb-g">
                        <div class="panel-heading">
                            <h3>Projects</h3>
                        </div>
                        <div class="panel-body">
                            <div class="ongoing-it-projects">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Project ID</th>
                                                <th scope="col">Team Leader</th>
                                                <th scope="col">Progress</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pro-3684</td>
                                                <td>
                                                    <div class="team-members">
                                                        <img src="../assets/images/ds-manager/bill.jpeg" alt="Jaffna Team" style="width: 60px;height: 60px;">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>24/01/2022</td>
                                                <td><a href="manager-details.php"><button class="btn btn-sm btn-primary"><i class="bi bi-eye-fill"></i></button></a></td>
                                            </tr>
                                            <tr>
                                                <td>Pro-4387</td>
                                                <td>
                                                    <div class="team-members">
                                                        <img src="../assets/images/ds-manager/sundar.jpg" alt="Mannar Team" style="width: 60px;height: 60px;">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>20/01/2022</td>
                                                <td><a href="manager-details.php"><button class="btn btn-sm btn-success"><i class="bi bi-eye-fill"></i></button></a></td>
                                            </tr>
                                            <tr>
                                                <td>Pro-5698</td>
                                                <td>
                                                    <div class="team-members">
                                                        <img src="../assets/images/ds-manager/steeve.jpg" alt="Mannar Team" style="width: 60px;height: 60px;">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>18/01/2022</td>
                                                <td><a href="manager-details.php"><button class="btn btn-sm btn-info"><i class="bi bi-eye-fill"></i></button></a></td>
                                            </tr>
                                            <tr>
                                                <td>Pro-1865</td>
                                                <td>
                                                    <div class="team-members">
                                                        <img src="../assets/images/ds-manager/elan.jpeg" alt="Killinochchi Team" style="width: 60px;height: 60px;">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>13/01/2022</td>
                                                <td><a href="manager-details.php"><button class="btn btn-sm btn-danger"><i class="bi bi-eye-fill"></i></button></a></td>
                                            </tr>
                                            <tr>
                                                <td>Pro-1668</td>
                                                <td>
                                                    <div class="team-members">
                                                        <img src="../assets/images/ds-manager/mark.jpeg" alt="Mullaitheevu Team" style="width: 60px;height: 60px;">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>07/01/2022</td>
                                                <td><a href="manager-details.php"><button class="btn btn-sm btn-warning"><i class="bi bi-eye-fill"></i></button></a></td>
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
                        <div class="panel-heading">
                            <h3>Staff Details</h3>
                        </div>
                        <div class="panel-body">
                            <div class="ongoing-it-projects">
                                <div class="project-control">
                                    <div class="btn-box">
                                        <a href=""><button class="btn btn-sm btn-primary">Add <i class="bi bi-plus-circle-fill"></i></button></a>
                                        <a href=""><button class="btn btn-sm btn-light"><i class="bi bi-trash-fill"></i></button></a>
                                    </div>
                                    <div class="search-box col-xl-8 col-lg-12">
                                        <div class="input-group input-group-sm">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <a href=""><button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Staff ID</th>
                                                <th scope="col">Name </th>
                                                <th scope="col">NIC </th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Tp No</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Join Date</th>
                                                <th scope="col">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- Display the staff details -->

                                            <?php
                                            require_once "admin/dbconnector.php";

                                            // Fetch data from the staff_details table
                                            $query = "SELECT User_ID, Staff_Name, NIC, Email, Address, Telephone_No, Position, Join_Date FROM staff_details";
                                            $result = mysqli_query($connection, $query);

                                            // Check if any rows are returned
                                            if (mysqli_num_rows($result) > 0) {

                                                // Iterate over the rows and display data in table rows
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<tr>
                                                                    <td>' . $row['User_ID'] . '</td>
                                                                    <td>' . $row['Staff_Name'] . '</td>
                                                                    <td>' . $row['NIC'] . '</td>
                                                                    <td>' . $row['Email'] . '</td>
                                                                    <td>' . $row['Address'] . '</td>
                                                                    <td>' . $row['Telephone_No'] . '</td>
                                                                    <td>' . $row['Position'] . '</td>
                                                                    <td>' . $row['Join_Date'] . '</td>
                                                                    <td><a href="manager-details.php"><button class="btn btn-sm btn-success"><i class="bi bi-eye-fill"></i></button></a></td>
                                                                </tr>';
                                                }

                                                // Close table
                                                echo '</tbody></table>';
                                            } else {
                                                // No rows found in the table
                                                echo '<td colspan="8">Data not found</td>';
                                            }

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

    <!-- It chart1 -->
    <script src="../assets/js/chart/it-chart-1.js"></script>

</body>


</html>