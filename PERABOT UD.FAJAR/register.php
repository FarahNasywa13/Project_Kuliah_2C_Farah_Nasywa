<?php
    if(!empty($_SESSION['username_perabot'])){
        header('location:home');
    }
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>perabot- Registration</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        
        .password-icon {
            cursor: pointer;
            position: absolute;
            top: 50%;
            right: 16px;
            transform: translateY(-50%);
            z-index: 1;
        }
    </style>

    <link href="assets/css/login.css" rel="stylesheet">
</head>

<body class="text-center d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        <form class="needs-validation" novalidate action="proses/proses_register.php" method="POST">
            <i class="bi bi-person-plus-fill fs-1"></i>
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating position-relative">
                <input name="nama" type="text" class="form-control" id="floatingUsername" placeholder="Username" required>
                <label for="floatingUsername">Username</label>
                <div class="invalid-feedback">
                    Please enter a valid username.
                </div>
            </div>

            <div class="form-floating position-relative">
                <input name="username" type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
                <label for="floatingEmail">Email address</label>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>

            <div class="form-floating position-relative">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                <i class="bi bi-eye password-icon" onclick="togglePasswordVisibility('floatingPassword')"></i>
                <div class="invalid-feedback">
                    Please enter a password.
                </div>
            </div>

            <button class="w-100 btn btn-lg btn-dark" type="submit" name="submit_register" value="register">Register</button>

            <p class="mt-3">
                Already have an account? <a href="login.php">Login here</a>.
            </p>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2022 - <?php echo date("Y") ?></p>
        </form>
    </main>

    <script>
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

        function togglePasswordVisibility(passwordFieldId) {
            var passwordField = document.getElementById(passwordFieldId);
            var passwordIcon = document.querySelector('.password-icon');

            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordIcon.classList.remove('bi-eye');
                passwordIcon.classList.add('bi-eye-slash');
            } else {
                passwordField.type = "password";
                passwordIcon.classList.remove('bi-eye-slash');
                passwordIcon.classList.add('bi-eye');
            }
        }
    </script>
</body>

</html>