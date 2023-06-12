<?php
session_start();
include_once("../../wp-includes/config.php");

if (isset($_POST['get_record'])) {
    $record_id = $_POST['record_id'];
    $payment_record = $conn->query("SELECT r.fullname as fullname, r.born as born, r.died as died, b.name as b_name, p.yearly as yearly, p.unitprice as amount, p.name as niche FROM tbl_payments a LEFT JOIN tbl_records r ON a.record_id = r.record_id LEFT JOIN tbl_packages p ON p.package_id = a.package_id LEFT JOIN tbl_billings b ON r.record_id = a.record_id WHERE a.record_id = '{$record_id}' LIMIT 1");

    if ($payment_record->num_rows > 0) {
        $response = $payment_record->fetch_assoc();
    } else {
        $response = "Something went wrong";
    }

    echo (json_encode($response));
} elseif (isset($_POST['pay-yearly'])) {
    $redirect = header("Location: ../yearly_payment.php");
    $record_id = $_POST['record_id'];
    $current_date = date("Y-m-d");

    $record_query = $conn->query("SELECT * FROM tbl_records WHERE record_id = '{$record_id}' LIMIT 1");

    if ($record_query->num_rows > 0) {
        $record_row = $record_query->fetch_assoc();
        $burial = $record_row['expiration'];

        switch ($_POST['status']) {
            case 'paid': {
                    $new_date = (date($burial)+1).date("-m-d");
                    $burial_date = date($new_date, strtotime('+1 years'));
                    $update_record = $conn->query("UPDATE tbl_records set expiration = '{$burial_date}' WHERE record_id = '{$record_id}' LIMIT 1");
                    if ($update_record) {
                        $_SESSION['success'] = "Successfully Updated";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                    break;
                }

            case 'unpaid': {
                    $new_date = (date($burial)-1).date("-m-d");
                    $burial_date = date($new_date, strtotime('-1 years'));

                    if ($burial_date < $current_date) {
                        $_SESSION['error'] = "No Remaining Years Left";
                        $redirect;
                    } else {
                        $update_record = $conn->query("UPDATE tbl_records set expiration = '{$burial_date}' WHERE record_id = '{$record_id}' LIMIT 1");
                        if ($update_record) {
                            $_SESSION['success'] = "Successfully Updated";
                            $redirect;
                        } else {
                            $_SESSION['error'] = "Something went wrong";
                            $redirect;
                        }
                    }
                    break;
                }

            default: {
                    $_SESSION['error'] = "Something went wrong";
                    $redirect;
                    break;
                }
        }
    } else {
        $_SESSION['error'] = "Something went wrong";
        $redirect;
    }
}
