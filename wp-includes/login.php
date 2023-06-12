<?php
session_start();
include_once("config.php");
if (isset($_POST['user-login'])) {
    $redirect = header("Location: ../");
    $email = $_POST["email"];
    $password = $_POST['password'];
    if (!empty($email)) {
        if (!empty($password)) {
            $login_query = $conn->query("SELECT * FROM tbl_users WHERE email = '{$email}' LIMIT 1");
            if ($login_query->num_rows > 0) {
                $tbl_user = $login_query->fetch_assoc();
                if (password_verify($password, $tbl_user['password'])) {
                    $_SESSION['user_id'] = $tbl_user['user_id'];
                    header("Location: ../dashboard/");
                }else{
                    $_SESSION['error'] = "Incorrect username or password";
                    $redirect;
                }
            } else {
                $_SESSION['error'] = "Incorrect username or password";
                $redirect;
            }
        }
    } else {
        $_SESSION['error'] = "Please enter your email address.";
        $redirect;
    }
} else {
    header("Location: ../");
    $_SESSION['error'] = "Please enter your email address. 1";
}
?>