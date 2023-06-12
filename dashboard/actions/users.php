<?php
session_start();
include_once("../../wp-includes/config.php");
include_once("../../wp-includes/utils.php");

if (isset($_POST['create-user'])) {
    $redirect = header("Location: ../users.php");
    $user_id = "_id" . token_generator(12);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encrypt_password = password_hash($password, PASSWORD_DEFAULT);
    $date_created = date("Y-m-d");

    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (isset_file('avatar')) {
            $img_name = $_FILES['avatar']['name'];
            $tmp_name = $_FILES['avatar']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $img_extension = ['png', 'jpg', 'jpeg'];
            $new_name = rand(100, 999) . '.' . $img_ext;
            if (in_array($img_ext, $img_extension) === true) {
                if (move_uploaded_file($tmp_name, "../../wp-images/" . $new_name)) {
                    $user_query = $conn->query("INSERT tbl_users(user_id, fname, lname, email, password, avatar, user_role, date_created) VALUES ('{$user_id}', '{$fname}', '{$lname}', '{$email}', '{$encrypt_password}', '{$new_name}', 'default', '{$date_created}')");
                    if ($user_query) {
                        $_SESSION['success'] = "Successfully Added";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                }
            } else {
                $_SESSION['error'] = "The file is not support only jpeg, jpg and png";
                $redirect;
            }
        } else {
            // for empty profile
            $user_query = $conn->query("INSERT tbl_users(user_id, fname, lname, email, password, avatar, user_role, date_created) VALUES ('{$user_id}', '{$fname}', '{$lname}', '{$email}', '{$encrypt_password}', 'default-avatar.png', 'default', '{$date_created}')");
            if ($user_query) {
                $_SESSION['success'] = "Successfully Added";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        }
    } else {
        $_SESSION['error'] = "Something went wrong, please try again.";
        $redirect;
    }
} elseif (isset($_POST['get_user'])) {
    $person_id = $_POST['user_id'];
    $user_query = $conn->query("SELECT * FROM tbl_users WHERE user_id = '{$person_id}' Limit 1");
    if ($user_query) {
        $response = $user_query->fetch_assoc();
    } else {
        $response = "Something went wrong";
    }
    echo (json_encode($response));
} elseif (isset($_POST['update-user'])) {
    $redirect = header("Location: ../users.php");
    $_uid = $_POST['_person-id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($_uid) && !empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (isset_file('avatar')) {
            //Not empty profile & not empty password.
            $img_name = $_FILES['avatar']['name'];
            $tmp_name = $_FILES['avatar']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $img_extension = ['png', 'jpg', 'jpeg'];
            $new_name = rand(100, 999) . '.' . $img_ext;
            if (in_array($img_ext, $img_extension) === true) {
                if (move_uploaded_file($tmp_name, "../../wp-images/" . $new_name)) {
                    $user_query = $conn->query("UPDATE tbl_users SET fname = '{$fname}', lname = '{$lname}', email = '{$email}', password = '{$hash}', avatar = '{$new_name}' WHERE user_id = '{$_uid}' LIMIT 1)");
                    if ($user_query) {
                        $_SESSION['success'] = "Successfully Added";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                }
            } else {
                $_SESSION['error'] = "The file is not support only jpeg, jpg and png";
                $redirect;
            }
        } else {
            //Empty profile but not empty password

            $user_query = $conn->query("UPDATE tbl_users SET fname = '{$fname}', lname = '{$lname}', email = '{$email}', password = '{$hash}' WHERE user_id = '{$_uid}' LIMIT 1");
            if ($user_query) {
                $_SESSION['success'] = "Successfully Updated";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        }
    } else {
        if (isset_file('avatar')) {
            //Empty password but not empty profile
            $img_name = $_FILES['avatar']['name'];
            $tmp_name = $_FILES['avatar']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $img_extension = ['png', 'jpg', 'jpeg'];
            $new_name = rand(100, 999) . '.' . $img_ext;
            if (in_array($img_ext, $img_extension) === true) {
                if (move_uploaded_file($tmp_name, "../../wp-images/" . $new_name)) {
                    $user_query = $conn->query("UPDATE tbl_users SET fname = '$fname', lname = '$lname', email = '{$email}', avatar = '{$new_name}' WHERE user_id = '{$_uid}' LIMIT 1");
                    if ($user_query) {
                        $_SESSION['success'] = "Successfully Added";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                }
            } else {
                $_SESSION['error'] = "The file is not support only jpeg, jpg and png";
                $redirect;
            }
        } else {
            // for empty profile & empty password

            $user_query = $conn->query("UPDATE tbl_users SET fname = '$fname', lname = '$lname', email = '{$email}' WHERE user_id = '{$_uid}' LIMIT 1");
            if ($user_query) {
                $_SESSION['success'] = "Successfully Updated";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        }
    }
} elseif (isset($_POST['user-session'])) {
    $redirect = header("Location: ../index.php");
    $_uid = $_POST['_person-id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($_uid) && !empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (isset_file('avatar')) {
            //Not empty profile & not empty password.
            $img_name = $_FILES['avatar']['name'];
            $tmp_name = $_FILES['avatar']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $img_extension = ['png', 'jpg', 'jpeg'];
            $new_name = rand(100, 999) . '.' . $img_ext;
            if (in_array($img_ext, $img_extension) === true) {
                if (move_uploaded_file($tmp_name, "../../wp-images/" . $new_name)) {
                    $user_query = $conn->query("UPDATE tbl_users SET fname = '{$fname}', lname = '{$lname}', email = '{$email}', password = '{$hash}', avatar = '{$new_name}' WHERE user_id = '{$_uid}' LIMIT 1)");
                    if ($user_query) {
                        $_SESSION['success'] = "Successfully Added";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                }
            } else {
                $_SESSION['error'] = "The file is not support only jpeg, jpg and png";
                $redirect;
            }
        } else {
            //Empty profile but not empty password

            $user_query = $conn->query("UPDATE tbl_users SET fname = '{$fname}', lname = '{$lname}', email = '{$email}', password = '{$hash}' WHERE user_id = '{$_uid}' LIMIT 1");
            if ($user_query) {
                $_SESSION['success'] = "Successfully Updated";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        }
    } else {
        if (isset_file('avatar')) {
            //Empty password but not empty profile
            $img_name = $_FILES['avatar']['name'];
            $tmp_name = $_FILES['avatar']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $img_extension = ['png', 'jpg', 'jpeg'];
            $new_name = rand(100, 999) . '.' . $img_ext;
            if (in_array($img_ext, $img_extension) === true) {
                if (move_uploaded_file($tmp_name, "../../wp-images/" . $new_name)) {
                    $user_query = $conn->query("UPDATE tbl_users SET fname = '$fname', lname = '$lname', email = '{$email}', avatar = '{$new_name}' WHERE user_id = '{$_uid}' LIMIT 1");
                    if ($user_query) {
                        $_SESSION['success'] = "Successfully Added";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                }
            } else {
                $_SESSION['error'] = "The file is not support only jpeg, jpg and png";
                $redirect;
            }
        } else {
            // for empty profile & empty password

            $user_query = $conn->query("UPDATE tbl_users SET fname = '$fname', lname = '$lname', email = '{$email}' WHERE user_id = '{$_uid}' LIMIT 1");
            if ($user_query) {
                $_SESSION['success'] = "Successfully Updated";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        }
    }
} elseif (isset($_GET['delete-user'])) {
    $redirect = header("Location: ../users.php");
    $_uid = $_GET['_uid'];

    $user_query = $conn->query("DELETE FROM tbl_users WHERE user_id = '{$_uid}' LIMIT 1");
    if ($user_query) {
        $redirect;
    } else {
        $redirect;
    }
} else {
    $_SESSION['error'] = "Invalid Request, what are you doing?";
    header("Location: ../users.php");
}
?>