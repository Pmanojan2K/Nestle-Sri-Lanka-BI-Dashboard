<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Lock Screen Login</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 25px;
      height: 100vh;
      margin: 0;
      background-color: white;
    }

    #login-form-wrap {
      max-width: 360px;
      width: 100%;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 20px;
      background-color: #fff;
      text-align: center;
      /* Center the contents */
    }

    h1,
    h2 {
      text-align: center;
      color: #333;
    }

    #password {
      width: 95%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    #login {
      display: block;
      margin: 0 auto;
      /* Center horizontally */
      width: 60%;
      padding: 10px;
      border: none;
      border-radius: 4px;
      background-color: limegreen;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    #login:hover {
      background-color: #00b300;
    }
  </style>
</head>

<body>
  <div id="login-form-wrap">
    <img src="nestle-logo4.png" alt="Logo" style="width: 100px; height: 100px;"><br>
    <h1 style="color: red;font-size: 50px;">Nestle</h1>
    <h2>Lock Screen Login</h2>

    <?php
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    include_once "../admin/dbconnector.php";

    if (isset($_POST['log'])) {
      $query = "SELECT Password FROM userpass_detail WHERE UserID = ?";
      $stmt = mysqli_prepare($connection, $query);

      if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $hashedPassword);
        mysqli_stmt_fetch($stmt);

        if (password_verify($password, $hashedPassword)) {
          // Password is correct, perform the desired action
          header("Location: index1.php");
          exit(); // Terminate the script after redirecting
        } else {
          // Password is incorrect or ID is missing, display an error message
          echo "<p style='color: red;'>Invalid ID or password. Please try again.</p>";
        }
      } else {
        // Statement preparation failed, display an error message or handle the error as desired
        echo "Statement preparation failed: " . mysqli_error($connection);
      }

      mysqli_stmt_close($stmt);
    }
    ?>

    <form method="POST">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="password" id="password" name="password" placeholder="Enter the password" required>
      <input type="submit" id="login" value="Login" name="log">
    </form>
  </div>
</body>

</html>