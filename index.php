<?php
session_start();
if(isset($_SESSION['user_id'])){
   header("Location: dashboard/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="wp-images/" type="image/x-icon">
    <title>Login</title>
    <!-- Sweet Alert 2-->
    <script src="wp-plugins/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="wp-plugins/sweetalert2/sweetalert2.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f2f2f2;
            display: grid;
            place-content: center;
            min-height: 100vh;
        }

        .box-login {
            background-color: #fff;
            border-radius: 5px;
        }

        .box-login header {
            padding: 15px 0;
            border-bottom: 1px solid #f2f2f2;
        }

        .box-login header h1 {
            font-weight: 500;
            padding-left: 5px;
            font-size: 25px;
            border-left: 5px solid #1e9ede;
        }

        .box-login header small {
            padding-left: 10px;
        }

        .box-login form {
            padding: 10px;
        }

        .form-group {
            width: 100%;
            margin-bottom: 10px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #f2f2f2;
            outline: none;
            font-size: 16px;
        }

        .form-group input:focus {
            border-color: #1e9ede;
        }

        .btn-group {
            width: 100%;
            margin-top: 25px;
        }

        .btn-group button {
            width: 100%;
            background-color: #1e9ede;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 0;
            font-size: 16px;
            cursor: pointer;
        }

        @media screen and (max-width: 400px) {
            body {
                background-color: #fff;
            }
        }
    </style>
</head>

<body>
    <section class="container">
        <div class="box-login">
            <header>
                <h1>Login</h1>
                <small>Welcome Back!</small>
            </header>
            <form action="wp-includes/login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" require>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" require>
                </div>
                <div class="btn-group">
                    <button name="user-login" type="submit">Sign In</button>
                </div>
            </form>
        </div>
    </section>
    <?php
    include_once("dashboard/response.php");
    ?>
</body>

</html>