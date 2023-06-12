<?php
session_start();
include_once("config.php");
include_once("utils.php");

require '../wp-plugins/PHPMailer/src/Exception.php';
require '../wp-plugins/PHPMailer/src/PHPMailer.php';
require '../wp-plugins/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$redirect = header("Location: ../forgot.php");

if(isset($_POST['_forgot'])){
    $email  =  htmlspecialchars($_POST['email']);
    $email_query = $conn->query("SELECT * FROM tbl_users WHERE email = '{$email}' LIMIT 1");

    if($email_query->num_rows > 0){
        // $_SESSION['success'] = "Successfully found";
        // $redirect;

        $fetch_row = $email_query->fetch_assoc();
        $name = $fetch_row['fname']. " ". $fetch_row['lname'];
        $new_password = token_generator(10);

        $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

        $email_update = $conn->query("UPDATE tbl_users SET password = '{$password_hash}' WHERE email = '{$email}' LIMIT 1");
        
        if($email_update){
            email_send($name, $email, $new_password, $title, $redirect);
        }else{
            $_SESSION['error'] = "Something went wrong";
            $redirect; 
        }
    }else{
        $_SESSION['error'] = "Invalid email address";
        $redirect;
    }
}else{
    $_SESSION['error'] = "Invalid request";
    $redirect;
}


function email_send($name, $email, $new_password, $redirect){

    $username = "reset@sample.shop";
    $password = "";//enter your password

    $image = "https://i.ibb.co/hsF5fd9/default-avatar.png";
    $title = "Cemetery - Forgot Password";

    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output, 1 for produciton , 2,3 for debuging in devlopment
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'mail.sample.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = $username; // SMTP username
    $mail->Password = $password; // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPSecure = 'tls'; //Updated encryption S/MIME, Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;   // for tls                                 // TCP port to connect to
    //$mail->Port = 465;

    //Recipients
    $mail->setFrom($username, $title); // from who?
    $mail->addAddress($email, $name); // Add a recipient
    $mail->addReplyTo('no-reply@cemetery.shop', 'Cemetery - Reset');


    //Content
    // this give you the exact link of you site in the right page
    // if you are in actual web server, instead of http://" . $_SERVER['HTTP_HOST'] write your link
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Cemetery Password Reset Request';
    $mail->Body = '
    <html>
   
    <body>
    <center>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="top">
                    <center style="
            width: 100%;
            table-layout: fixed;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            background-color: #fffbfb;
        ">
                        <div style="
            max-width: 600px;
            margin-top: 0;
            margin-bottom: 0;
            margin-right: auto;
            margin-left: auto;
            ">
                            <table align="center" cellpadding="0" style="
                border-spacing: 0;
                color: #000;
                margin: 0 auto;
                width: 100%;
            ">
                                <tbody>
                                    <!-- whitespace -->
                                    <tr>
                                        <td height="40">
                                            <p style="
                        line-height: 40px;
                        padding: 0 0 0 0;
                        margin: 0 0 0 0;
                    ">
                                                &nbsp;
                                            </p>
                                            <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="cemetery" width="300px" style="
                    padding-top: 0;
                    padding-bottom: 0;
                    padding-right: 0;
                    padding-left: 0;
                    height: 143px;
                    vertical-align: middle;
                    " valign="middle">
                                            <span class="sg-image"
                                                data-imagelibrary="%7B%22width%22%3A%22160%22%2C%22height%22%3A34%2C%22alt_text%22%3A%22Verve%20Wine%22%2C%22alignment%22%3A%22%22%2C%22border%22%3A0%2C%22src%22%3A%22https%3A//marketing-image-production.s3.amazonaws.com/uploads/79d8f4f889362f0c7effb2c26e08814bb12f5eb31c053021ada3463c7b35de6fb261440fc89fa804edbd11242076a81c8f0a9daa443273da5cb09c1a4739499f.png%22%2C%22link%22%3A%22%23%22%2C%22classes%22%3A%7B%22sg-image%22%3A1%7D%7D"><a
                                                    href="https://cemetery.rf.gd" target="_blank"><img width="300px"
                                                        src="'.$image.'" style="border-width: 0px" /></a></span>
                                        </td>
                                    </tr>
                                    <!-- Start of Email Body-->
                                    <tr>
                                        <td class="one-column" style="
                    padding-top: 0;
                    padding-bottom: 0;
                    padding-right: 0;
                    padding-left: 0;
                    background-color: #fffbfb;
                    ">
                                            <table style="border-spacing: 0" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td class="inner contents center"
                                                            style="padding-top: 15px; text-align: left">
                                                            <div style="
                                background-color: #fffbfb;
                                padding: 5px 10px;
                            " class="container">
                                                                <h2>Reset Your Cemetery Account Password</h2>
                                                                <hr />
                                                                <div class="description" style="font-size: 15px">
                                                                    <p>Hello <b>' . $name . ',</b></p>
                                                                    <p>
                                                                        To help you securely access your account, we
                                                                        have generated a temporary password that you can
                                                                        use to login. Please use the following temporary
                                                                        password:
                                                                        <br>
                                                                        <br>
                                                                        <b>'. $new_password.'</b>
                                                                        <br>
                                                                        <br>
                                                                        Please note that this temporary password is
                                                                        valid for a limited time only and must be
                                                                        changed immediately upon login. Cemetery takes
                                                                        your account security very seriously, so please
                                                                        do not share this password with anyone.
                                                                        Cemetery Customer Service will never ask you
                                                                        to disclose or verify your Cemetery password,
                                                                        credit card, or banking account number. If you
                                                                        receive a suspicious email with a link to update
                                                                        your account information, do not click on the
                                                                        link -- instead, report the email to
                                                                        cemetery@gmail.com."
                                                                        <br />
                                                                        <br />
                                                                        Cemetery Team,<br>
                                                                        Thank You!
                                                                        <center>
                                                                            ***Please do not reply to this notice,
                                                                            as this message has been sent by an
                                                                            automated process***
                                                                        </center>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <!-- End of Email Body-->
                                    <!-- whitespace -->
                                    <tr>
                                        <td height="40">
                                            <p style="
                        line-height: 40px;
                        padding: 0 0 0 0;
                        margin: 0 0 0 0;
                    ">
                                                &nbsp;
                                            </p>

                                            <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                    <!-- Footer -->
                                    <tr>
                                        <td style="
                    padding-top: 0;
                    padding-bottom: 0;
                    padding-right: 30px;
                    padding-left: 30px;
                    text-align: center;
                    margin-right: auto;
                    margin-left: auto;
                    ">
                                            <center>
                                                <p style="
                        margin: 0;
                        text-align: center;
                        margin-right: auto;
                        margin-left: auto;
                        font-size: 15px;
                        color: #a1a8ad;
                        line-height: 23px;
                        ">
                                                    Problems or questions? Call us at
                                                    <nobr><a class="tel" href="tel:09224869516"
                                                            style="color: #a1a8ad; text-decoration: none"
                                                            target="_blank"><span
                                                                style="white-space: nowrap">0922-486-9516</span></a>
                                                    </nobr>
                                                </p>

                                                <p style="
                        margin: 0;
                        text-align: center;
                        margin-right: auto;
                        margin-left: auto;
                        font-size: 15px;
                        color: #a1a8ad;
                        line-height: 23px;
                        ">
                                                    or email
                                                    <a href="mailto:cemetery@gmail.com"
                                                        style="color: #a1a8ad; text-decoration: underline"
                                                        target="_blank">cemetery@gmail.com</a>
                                                </p>

                                                <p style="
                        margin: 0;
                        text-align: center;
                        margin-right: auto;
                        margin-left: auto;
                        padding-top: 10px;
                        padding-bottom: 0px;
                        font-size: 15px;
                        color: #a1a8ad;
                        line-height: 23px;
                        ">
                                                    Copyright © 2022 - 2023
                                                    <span style="white-space: nowrap">
                                                        Cemetery​</span>,
                                                    <span style="white-space: nowrap">Alright Reserved.
                                                    </span>
                                                </p>
                                            </center>
                                        </td>
                                    </tr>
                                    <!-- whitespace -->
                                    <tr>
                                        <td height="40">
                                            <p style="
                        line-height: 40px;
                        padding: 0 0 0 0;
                        margin: 0 0 0 0;
                    ">
                                                &nbsp;
                                            </p>
                                            <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </center>
                </td>
            </tr>
        </table>
    </center>
    </body>

    
    </html>
    ';

    if ($mail->send()) {
        $_SESSION['success'] = "Successfully sent";
        $redirect;
    } else {
      $_SESSION['error'] = "Something went wrong";
      $redirect;
    }
}
?>