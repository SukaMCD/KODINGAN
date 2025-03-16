<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leafly Tea - Premium Tea Beverages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #3f594a;
        }

        .container {
            width: 100%;
            display: flex;
            max-width: 850px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .login {
            width: 450px;
            padding-right: 20px;
        }

        form {
            width: 250px;
            margin: 60px auto;
        }

        h1 {
            margin: 20px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
        }

        hr {
            border-top: 2px solid #3f594a;
        }

        p {
            text-align: center;
            margin: 10px 0;
        }

        .right {
            flex: 1;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .right img {
            width: 80%;
            height: auto;
            aspect-ratio: 1/1;
            object-fit: cover;
            border-radius: 15px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #3f594a;
        }

        .form-control {
            width: 100%;
            padding: 8px 8px 8px 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .forgot-pass {
            display: block;
            text-align: right;
            margin-bottom: 20px;
            color: #3f594a;
            text-decoration: none;
            font-size: 14px;
        }

        button {
            border: none;
            outline: none;
            padding: 8px;
            width: 100%;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            background: #3f594a;
        }

        button:hover {
            background: rgb(42, 58, 49);
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            color: #3f594a;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 880px) {
            .container {
                width: 100%;
                max-width: 750px;
                margin-left: 20px;
                margin-right: 20px;
            }

            form {
                width: 300px;
                margin: 20px auto;
            }

            .login {
                width: 450px;
                padding: 20px;
            }

            .right img {
                width: 70%;
                height: auto;
            }
        }

        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }

            .login {
                width: 100%;
            }

            .right {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="proses_login.php" method="POST">
                <h1>Login</h1>
                <hr>
                <p>Leafly Tea</p>

                <div class="form-group">
                    <i class="bi bi-person form-icon"></i>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <i class="bi bi-lock form-icon"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <a href="#" class="forgot-pass">Forgot password?</a>

                <button type="submit">Login</button>

                <div class="register-link">
                    Don't have an account? <a href="register.php">Register</a>
                </div>
            </form>
        </div>
        <div class="right">
            <img src="gambar/Logo 1.png" alt="Leafly Tea">
        </div>
    </div>

    <!-- Bootstrap Icons JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/bootstrap-icons.min.js"></script>
</body>

</html>