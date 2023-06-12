<?php
include_once("../../wp-includes/config.php");

if(isset($_POST['get_package'])){
    $package_id = $_POST['package_id'];
    $pkg_query = $conn->query("SELECT * FROM tbl_packages WHERE package_id = '{$package_id}' LIMIT 1");
    if($pkg_query->num_rows > 0){
        $fetch_data = $pkg_query->fetch_assoc();
    }else{
        $fetch_data = "Error Something went wrong";
    }
    echo(json_encode($fetch_data));
}
?>