<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            overflow: hidden;
            position: relative;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            width: 400px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h1 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .card img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .card form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card input[type="text"],
        .card input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.3);
            color: white;
            font-size: 1rem;
            outline: none;
        }

        .card input[type="text"]::placeholder,
        .card input[type="password"]::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .password-container {
            position: relative;
        }

        .password-container i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: rgba(255, 255, 255, 0.7);
        }

        .card input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 25px;
            background: linear-gradient(to right, #667eea, #764ba2);
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .card input[type="submit"]:hover {
            background: linear-gradient(to right, #764ba2, #667eea);
            transform: translateY(-3px);
        }

        .signup {
            margin-top: 20px;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .signup a {
            color: #fff;
            text-decoration: underline;
        }

        footer {
            position: absolute;
            bottom: 20px;
            color: white;
            opacity: 0.7;
            font-size: 0.8rem;
            text-align: center;
            width: 100%;
        }

        .error-message {
            color: red;
            background-color: rgba(255, 0, 0, 0.1);
            border: 1px solid red;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Welcome</h1>
        <img src="https://storage.googleapis.com/a1aa/image/LmdoIRlRL7LLFplM4Hyzb3pYfPhjKWQApzSXwjHWOUhzRP3JA.jpg" alt="Logo with letter A">

        <!-- Error message box -->
        <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <div class="error-message">Username atau password salah!</div>
        <?php endif; ?>

        <form method="post" action="cek_login.php">
            <input type="text" name="username" placeholder="Username" required>
            <div class="password-container">
                <input type="password" name="password" placeholder="Password" required>
                <i class="fas fa-eye"></i>
            </div>
            <input type="submit" value="LOGIN">
        </form>

        <div class="signup">
            Don't have an account? <a href="register.php">Sign Up</a>
        </div>
    </div>

    <footer>
        &copy; 2024 Your Company. All rights reserved.
    </footer>
</body>

</html>
