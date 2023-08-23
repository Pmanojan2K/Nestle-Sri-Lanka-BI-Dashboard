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
                                <h2>Edit</h2>
                            </div>
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index1.php"><i class="bi bi-gear"></i> Settings</a></li>
                                    <li><i class="bi bi-caret-right-fill"></i></li>
                                    <li>Edit</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="panel mb-g">
                        <div class="panel-heading">
                            <h3>Add Staff</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="row mb-15">
                                    <label for="lstname" class="col-sm-4 col-form-label">Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-lg" id="lstname" placeholder="Enter the name">
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <label for="lstname" class="col-sm-4 col-form-label">NIC</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-lg" id="lstname" placeholder="Enter the nic number">
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Email Address</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control form-control-lg" id="inputEmail3" placeholder="Enter the Email address">
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Address</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control form-control-lg" id="inputEmail3" placeholder="Enter the address">
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Mobile</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control form-control-lg" id="inputEmail3" placeholder="Enter the TP number">
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control form-control-lg" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <div class="col-sm-8 offset-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                Show Password
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <label for="position" class="col-sm-4 col-form-label">Select Role</label>
                                    <div class="col-sm-8">
                                        <select name="position" class="form-select form-control form-control-lg" required>
                                            <option value="" selected hidden>Select the position</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Assistant Manager">Assistant Manager</option>
                                            <option value="Employee">Employee</option>
                                            <option value="Trainee">Trainee</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-15">
                                    <label for="position" class="col-sm-4 col-form-label">Join Date</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="expire date" class="form-date form-control form-control-lg" required>
                                    </div>
                                </div>
                                <div class="btn-box d-flex justify-content-center mt-3"> <!-- Removed extra dash from the class name -->
                                    <button type="submit" class="btn btn-lg btn-primary" style="width: 45%; display: inline-block;">Save</button>
                                    <button type="reset" class="btn btn-lg btn-danger" style="width: 45%; display: inline-block;">Clear</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="panel mb-g">
                        <div class="panel-heading">
                            <h3>Edit Staff</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="mb-15">
                                    <label for="exampleInputName2" class="form-label">Name</label>
                                    <div class="form-group has-icon-left">
                                        <input type="text" class="form-control form-control-lg" id="exampleInputName2" placeholder="Name">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15">
                                    <label for="exampleInputEmail2" class="form-label">NIC</label>
                                    <div class="form-group has-icon-left">
                                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail2" placeholder="Enter the nic">
                                        <div class="form-control-icon">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15">
                                    <label for="exampleInputEmail2" class="form-label">Email Address</label>
                                    <div class="form-group has-icon-left">
                                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail2" placeholder="Email Address">
                                        <div class="form-control-icon">
                                            <i class="bi bi-envelope-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15">
                                    <label for="exampleInputMobile2" class="form-label">Mobile</label>
                                    <div class="form-group has-icon-left">
                                        <input type="tel" class="form-control form-control-lg" id="exampleInputMobile2" placeholder="Mobile">
                                        <div class="form-control-icon">
                                            <i class="bi bi-telephone-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-15">
                                    <label for="exampleInputPassword2" class="form-label">Password</label>
                                    <div class="form-group has-icon-left">
                                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword2" placeholder="Password">
                                        <div class="form-control-icon">
                                            <i class="bi bi-key-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-14 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">Show Password</label>
                                </div>
                                <div class="btn-box d-flex justify-content-center mt-3"> <!-- Removed extra dash from the class name -->
                                    <button type="submit" class="btn btn-lg btn-primary" style="width: 45%; display: inline-block;">Update</button>
                                    <button type="reset" class="btn btn-lg btn-danger" style="width: 45%; display: inline-block;">Clear</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content -->
    </div>

    <script src="../assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/vendor/js/simplebar.min.js"></script>
    <script src="../assets/vendor/js/prettify.js"></script>
    <script src="../assets/vendor/js/dragula.min.js"></script>
    <script src="../assets/vendor/js/bs-dropzone.min.js"></script>
    <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>