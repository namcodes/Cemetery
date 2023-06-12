<?php
session_start();
include_once("../../wp-includes/config.php");
include_once("../../wp-includes/utils.php");

if (isset($_POST['add-grave-location'])) {
    $redirect = header("Location: ../grave-locations.php");
    $package = $_POST['packages'];
    $section = $_POST['section'];
    $grave = $_POST['grave'];

    $location_query = $conn->query("INSERT INTO tbl_locations(name, section, grave_number) VALUES('{$package}', '{$section}', '{$grave}')");

    if ($location_query) {
        $_SESSION['success'] = "Successfully Added";
        $redirect;
    } else {
        $_SESSION['error'] = "Something went wrong";
        $redirect;
    }
} else if (isset($_POST['get_data'])) {
    $grave_id = $_POST['grave_id'];

    $location_query = $conn->query("SELECT * FROM tbl_locations WHERE _id = '{$grave_id}' LIMIT 1");
    if ($location_query) {
        $response = $location_query->fetch_assoc();
        $redirect;
    } else {
        $response = "Something went wrong";
        $redirect;
    }
    echo (json_encode($response));
} else if (isset($_POST['edit-grave-location'])) {
    $redirect = header("Location: ../grave-locations.php");
    $grave_id = $_POST['grave_id'];
    $package = $_POST['packages'];
    $section = $_POST['section'];
    $grave = $_POST['grave'];

    if(!empty($package)){
        $location_query = $conn->query("UPDATE tbl_locations SET name = '{$package}', section = '{$section}', grave_number = '{$grave}' WHERE _id = '{$grave_id}' LIMIT 1");
        if ($location_query) {
            $_SESSION['success'] = "Successfully Updated";
            $redirect;
        } else {
            $_SESSION['error'] = "Something went wrong";
            $redirect;
        }
    }else{
        $location_query = $conn->query("UPDATE tbl_locations SET section = '{$section}', grave_number = '{$grave}' WHERE _id = '{$grave_id}' LIMIT 1");
        if ($location_query) {
            $_SESSION['success'] = "Successfully Updated";
            $redirect;
        } else {
            $_SESSION['error'] = "Something went wrong";
            $redirect;
        }
    }
 
} else if (isset($_GET['delete-grave-location'])) {
    $redirect = header("Location: ../grave-locations.php");
    $grave_id = $_GET['grave_id'];
    $location_query = $conn->query("DELETE FROM tbl_locations WHERE _id = '{$grave_id}' LIMIT 1");

    if ($location_query) {
        $redirect;
    } else {
        $redirect;
    }
} else {
    $redirect = header("Location: ../grave-locations.php");
    $_SESSION['error'] = "Something went wrong";
    $redirect;
}
?>