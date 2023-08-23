<?php
if (isset($_POST['submit'])) {
    require_once "admin/dbconnector.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT Username, Password FROM userpass_detail WHERE Username='$username'";
    $result = $connection->query($query);
    $row = $result->fetch_assoc();
    $count = $result->num_rows;

    if ($count == 1) {
        $dbUsername = $row['Username'];
        $dbPassword = $row['Password'];

        if ($username == "Nestleadmin" && $password == $dbPassword) {
            session_start();
            $_SESSION['authenticated'] = $dbUsername;
            header("Location: index1.php");
            exit();
        } else if ($username == "jaffnamgr" && $password == $dbPassword) {
            header("Location: index-jaff.php");
            exit();
        } else {
            header("Location: errormessage.php");
            exit();
        }
    } else {
        header("Location: errormessage.php");
        exit();
    }
}
