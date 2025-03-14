<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - Finapp Style</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-title {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            color: #4e54c8;
        }

        .form-label {
            font-weight: 500;
            color: #555;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 15px;
            transition: 0.3s;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #4e54c8;
            box-shadow: 0 0 8px rgba(78, 84, 200, 0.3);
        }

        .btn-primary {
            background: linear-gradient(90deg, #4e54c8, #8f94fb);
            border: none;
            border-radius: 12px;
            padding: 12px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #8f94fb, #4e54c8);
        }

        .form-icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #aaa;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group input {
            padding-left: 40px;
        }

        .forgot-pass {
            display: block;
            text-align: right;
            margin-top: -10px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #888;
            text-decoration: none;
        }

        .forgot-pass:hover {
            text-decoration: underline;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            color: #888;
            font-size: 14px;
        }

        .register-link a {
            color: #4e54c8;
            text-decoration: none;
            font-weight: 500;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            color: #aaa;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2 class="login-title">Login Finapp</h2>

        <form action="proses_login.php" method="POST">

            <div class="form-group">
                <i class="bi bi-person form-icon"></i>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>

            <div class="form-group">
                <i class="bi bi-lock form-icon"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <a href="#" class="forgot-pass">Lupa password?</a>

            <button type="submit" class="btn btn-primary w-100">Login</button>

        </form>

        <div class="register-link">
            Belum punya akun? <a href="register.php">Daftar Sekarang</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
