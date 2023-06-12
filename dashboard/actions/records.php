<?php
session_start();
include_once("../../wp-includes/config.php");
include_once("../../wp-includes/utils.php");

if (isset($_POST['add-records'])) {
    $redirect = header("Location: ../niches.php");
    //Dead Details
    $fullname = $_POST['fname'];
    $burial = $_POST['burial'];
    $grave_section = $_POST['grave_section'];

    $born = $_POST['born'];
    $died = $_POST['died'];

    //Billing Details
    $bname = $_POST['bname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $payment_status = "Paid";

    //Package Details
    $amount = $_POST['unitprice'];

    //Package Details
    $package_id = $_POST['package'];
    $billing_id = '_bid' . token_generator(11);
    $record_id = '_rid' . token_generator(11);

    $current_date = date("Y-m-d");

    $burial_date = date("Y-m-d", strtotime('+7 years'));

    if ($current_date < $died) {
        $_SESSION['error'] = "Oops check the current date, please try again.";
        $redirect;
    } else {
        if ($died > $born) {
            $record_query = "INSERT INTO tbl_records (fullname, grave_section, born, died, burial, record_id, billing_id, pkg_id, status, expiration)
                                 VALUES ('{$fullname}', '{$grave_section}', '{$born}', '{$died}', '{$burial}', '{$record_id}', '{$billing_id}', '{$package_id}', 'default', '{$burial_date}');
                             INSERT INTO tbl_billings (name, contact, email_address, amount_paid, purchase_date, record_id, billing_id, pkg_id)
                                 VALUES ('{$bname}', '{$contact}', '{$email}', '{$amount}', '{$current_date}', '{$record_id}', '{$billing_id}', '{$package_id}');
                             INSERT INTO tbl_payments (status, niche_payment, record_id, billing_id, package_id, date_created)
                                 VALUES ('{$payment_status}', '{$amount}', '{$record_id}', '{$billing_id}', '{$package_id}', '{$current_date}');";
            $executeQuery = $conn->multi_query($record_query);
            if ($executeQuery) {
                $_SESSION['success'] = "Successfully Added";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        } else {
            $_SESSION['error'] = "The BIRTH DATE must be less than the DEATH DATE, please try again.";
            $redirect;
        }
    }
} elseif (isset($_POST['edit-records'])) {
    $redirect = header("Location: ../niches.php");

    $record_id = $_POST['record_id'];

    $fullname = $_POST['fname'];

    $burial = $_POST['burial'];
    $grave_section = $_POST['grave_section'];

    $born = $_POST['born'];
    $died = $_POST['died'];
    $current_date = date("Y-m-d");

    //Billing Details
    $bname = $_POST['bname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    
    $payment_status = "Paid";

    //Package Details
    $amount = $_POST['unitprice'];

    //Package Details
    $package_id = $_POST['package'];

    $date_transfer = $_POST['transfer_date'];

    if (!empty($amount) && !empty($package_id)) {
        if (!empty($grave_section)) {
            if ($current_date < $died) {
                $_SESSION['error'] = "Oops check the current date, please try again.";
                $redirect;
            } else {
                if ($died > $born) {
                    $record_query = "UPDATE tbl_records SET fullname = '{$fullname}', grave_section = '{$grave_section}', born = '{$born}', died = '{$died}', burial = '{$burial}', date_transfer = '{$date_transfer}', pkg_id = '{$package_id}'
                                WHERE record_id = '{$record_id}';
                             UPDATE tbl_billings SET name = '{$bname}', contact = '{$contact}', email_address = '{$email}', amount_paid = '{$amount}', pkg_id = '{$package_id}'
                                WHERE record_id = '{$record_id}';
                             UPDATE tbl_payments SET status = '{$payment_status}', package_id = '{$package_id}', niche_payment = '{$amount}'
                                 WHERE record_id = '{$record_id}'";

                    $executeQuery = $conn->multi_query($record_query);
                    if ($executeQuery) {
                        $_SESSION['success'] = "Successfully Updated";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                } else {
                    $_SESSION['error'] = "The BIRTH DATE must be less than the DEATH DATE, please try again.";
                    $redirect;
                }
            }
        } else {
            $record_query = "UPDATE tbl_records SET fullname = '{$fullname}', born = '{$born}', died = '{$died}', burial = '{$burial}', date_transfer = '{$date_transfer}', pkg_id = '{$package_id}'
                            WHERE record_id = '{$record_id}';
                         UPDATE tbl_billings SET name = '{$bname}', contact = '{$contact}', email_address = '{$email}', amount_paid = '{$amount}', pkg_id = '{$package_id}'
                            WHERE record_id = '{$record_id}';
                         UPDATE tbl_payments SET status = '{$payment_status}', package_id = '{$package_id}', niche_payment = '{$amount}'
                            WHERE record_id = '{$record_id}'";

            $executeQuery = $conn->multi_query($record_query);
            if ($executeQuery) {
                $_SESSION['success'] = "Successfully Updated";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        }
    } else {
        if (!empty($grave_section)) {
            if ($current_date < $died) {
                $_SESSION['error'] = "Oops check the current date, please try again.";
                $redirect;
            } else {
                if ($died > $born) {
                    $record_query = "UPDATE tbl_records SET fullname = '{$fullname}', grave_section = '{$grave_section}', born = '{$born}', died = '{$died}', burial = '{$burial}', date_transfer = '{$date_transfer}'
                            WHERE record_id = '{$record_id}';
                         UPDATE tbl_billings SET name = '{$bname}', contact = '{$contact}', email_address = '{$email}'
                            WHERE record_id = '{$record_id}'";

                    $executeQuery = $conn->multi_query($record_query);
                    if ($executeQuery) {
                        $_SESSION['success'] = "Successfully Updated";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                } else {
                    $_SESSION['error'] = "The BIRTH DATE must be less than the DEATH DATE, please try again.";
                    $redirect;
                }
            }
        } else {
            if ($current_date < $died) {
                $_SESSION['error'] = "Oops check the current date, please try again.";
                $redirect;
            } else {
                if ($died > $born) {
                    $record_query = "UPDATE tbl_records SET fullname = '{$fullname}', born = '{$born}', died = '{$died}', burial = '{$burial}', date_transfer = '{$date_transfer}'
                            WHERE record_id = '{$record_id}';
                         UPDATE tbl_billings SET name = '{$bname}', contact = '{$contact}', email_address = '{$email}'
                            WHERE record_id = '{$record_id}'";

                    $executeQuery = $conn->multi_query($record_query);
                    if ($executeQuery) {
                        $_SESSION['success'] = "Successfully Updated";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                } else {
                    $_SESSION['error'] = "The BIRTH DATE must be less than the DEATH DATE, please try again.";
                    $redirect;
                }
            }
        }
    }
} elseif (isset($_GET['move_data'])) {
    $redirect = header("Location: ../dako-nga-cross.php");
    $record_id = $_GET['record_id'];
    $record_query = $conn->query("UPDATE tbl_records SET status = 'cross' WHERE record_id = '{$record_id}' LIMIT 1");
    if ($record_query) {
        $redirect;
    } else {
        $redirect;
    }
} elseif (isset($_GET['delete-records'])) {
    $redirect = header("Location: ../niches.php");
    $record_id = $_GET['record_id'];

    $str_query = "DELETE FROM tbl_records 
                    WHERE record_id = '{$record_id}' 
                    LIMIT 1;
                  DELETE FROM tbl_billings 
                    WHERE record_id = '{$record_id}' 
                    LIMIT 1;
                  DELETE FROM tbl_payments 
                  WHERE record_id = '{$record_id}' 
                  LIMIT 1";
    $record_query = $conn->multi_query($str_query);
    if ($record_query) {
        $redirect;
    } else {
        $redirect;
    }
} else {
    $_SESSION['error'] = "Invalid request, what are you doin'?";
    header("Location: ../niches.php");
}
