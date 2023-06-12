<?php
include_once("../../wp-includes/config.php");

if(isset($_POST['get_contact'])){
    $billing_id = $_POST['contact_id'];
    $billing_query = $conn->query("SELECT * FROM tbl_billings WHERE billing_id = '{$billing_id}' LIMIT 1");
    if($billing_query->num_rows > 0){
        $fetch_data = $billing_query->fetch_assoc();
    }else{
        $fetch_data = "Error Something went wrong";
    }
    echo(json_encode($fetch_data));
}else if($_POST['get_record']){
    $record_id = $_POST['record_id'];
    $billing_query = $conn->query("SELECT p.status AS status, r.fullname AS fullname, r.grave_section AS grave_section, b.amount_paid AS amount, b.purchase_date AS purchase_date, pkg.name AS niche_type FROM tbl_payments p LEFT JOIN tbl_records r ON p.record_id = r.record_id LEFT JOIN tbl_billings b ON p.billing_id = b.billing_id LEFT JOIN tbl_packages pkg ON p.package_id = pkg.package_id WHERE r.record_id = '{$record_id}' LIMIT 1");
    if($billing_query->num_rows > 0){
        $response = $billing_query->fetch_assoc();
    }else{
        $response = "Something went wrong.";
    }
    echo(json_encode($response));
}
?>