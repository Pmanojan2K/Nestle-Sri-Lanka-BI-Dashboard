<!DOCTYPE html>
<html>

<head>
  <title>Error Message Box</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    .error-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      border: 1px solid #e74c3c;
      background-color: white;
      color: #c0392b;
      padding: 10px;
      border-radius: 5px;
      width: 90%;
      height: 50%;
      max-width: 650px;
      text-align: center;
    }

    .error-message {
      font-size: 25px;
      margin-bottom: 10px;
    }

    .error-image {
      margin-bottom: 10px;
    }

    .button-container {
      margin-top: 10px;
    }

    .back-button {
      background-color: red;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      width: 200px;
      font-size: 18px;
      text-decoration: none !important;
    }
  </style>
</head>

<body>
  <div class="error-box">
    <div class="error-message">Incorrect username or password</div>
    <a href="index.php"><img src="../assets/images/error/wrong.gif" alt="Error" style="width: 250px;"></a>
    <div class="button-container">
      <a href="index.php" class="back-button">Back</a>
    </div>
  </div>
</body>

</html>