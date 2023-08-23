<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nestle Sri Lanka</title>

    <link rel="shortcut icon" href="../assets/images/image-nes/logo-small.png">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icon/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/vendor/css/simplebar.css">
    <link rel="stylesheet" href="../assets/vendor/css/prettify.css">
    <link rel="stylesheet" href="../assets/vendor/css/bootstrap.min.css">
    <link id="styles" rel="stylesheet" href="../assets/css/style.css">
</head>

<body style="background: url('../assets/images/background/scr1.jpg') repeat center center fixed; background-size: cover;">
    <div class="container-fluid">
        <div class="authentication-area">
            <div class="form-row">
                <div class="panel">
                    <div class="panel-body">
                        <div class="logo mb-4">
                            <img src="../assets/images/image-nes/nestle-logo3.png" id="logoBig" alt="logo">
                            <p class="text-center mt-20"><span class="d-block fw-bold mb-10 fs-6">Hello! let's get started</span> Sign in to continue.</p>
                        </div>
                        <form class="mb-4" action="check-pass.php" method="post" style="background-color: transparent;">
                            <div class="mb-4">
                                <div class="form-group has-icon-left">
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="@username" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-group has-icon-left">
                                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-key-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mb-4">
                                <input type="checkbox" id="showPassword" class="form-check-input">
                                <label for="showPassword">Show Password</label>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-5 text-center">
                                    <button type="submit" class="btn btn-lg btn-primary" name="submit" style="width: 100%;">Log In</button>
                                </div>
                                <div class="col-5 text-center">
                                    <button type="reset" class="btn btn-lg btn-danger" name="submit" style="width: 100%;">Reset</button>
                                </div>
                            </div>
                        </form>
                        <a href="password.php">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
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

<?php
echo "
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
    ";
?>