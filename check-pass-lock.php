<?php
$id = isset($_POST['id']) ? $_POST['id'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

echo "The ID value is: " . $id . "" . $password;

include_once "admin/dbconnector.php";

if (isset($_POST['log'])) {
    $query = "SELECT UserID, Password FROM userpass_details WHERE UserID = '$id' AND Password = '$password'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Query executed successfully
        $row = mysqli_fetch_assoc($result);

        if ($row && $row['UserID'] === $id && $row['Password'] === $password) {
            // Password and ID are correct, perform the desired action
            header("Location: index1.php");
            exit(); // Terminate the script after redirecting
        } else {
            // Password is incorrect or ID is missing, display an error message
            header("Location: errormessage.php");
            exit(); // Terminate the script after redirecting
        }
    } else {
        // Query execution failed, display an error message or handle the error as desired
        echo "Query execution failed: " . mysqli_error($connection);
    }
}
