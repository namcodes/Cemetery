<?php


function generate_code(
  int $length,
  string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
  if ($length < 1) {
    throw new \RangeException("Length must be a positive integer");
  }
  $pieces = [];
  $max = mb_strlen($keyspace, '8bit') - 1;
  for ($i = 0; $i < $length; ++$i) {
    $pieces[] = $keyspace[random_int(0, $max)];
  }
  return implode('', $pieces);
}

include_once("../../wp-includes/config.php");


require '../../wp-plugins/PHPMailer/src/Exception.php';
require '../../wp-plugins/PHPMailer/src/PHPMailer.php';
require '../../wp-plugins/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['token']) && isset($_POST['send_invoice'])) {

  $mail_host = "mail.pcvillage.shop";
  $username = "cemtery2@pcvillage.shop";
  $password = "P@ssword123";//goaluitrkgqdfzzj
  $title = "Cemetery";

  $email = $_POST['email'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $product = $_POST['product'];
  $reference = "#" . generate_code(14);
  $date = date('Y-m-d');

  $insert_reference = $conn->query("INSERT INTO tbl_invoice(name, price, product, reference, date) VALUES ('{$name}', '{$price}', '{$product}', '{$reference}', '{$date}')");
  
  if ($insert_reference) {
    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output, 1 for produciton , 2,3 for debuging in devlopment
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = $mail_host; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = $username; // SMTP username
    $mail->Password = $password; // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;   // for tls                                 // TCP port to connect to
    //$mail->Port = 465;// for ssl

    $mail->setFrom($username, $title); // from who?
    $mail->addAddress($email, $name); // Add a recipient
    $mail->addReplyTo('no-reply@cemetery.com', 'Cemtery Invoice');
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Invoice Cemetery';
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
                background-color: #fff;
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
                        <td align="center" class="santisima" width="300px" style="
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
                                src="https://i.ibb.co/Xz3vqXk/default-avatar.png" style="border-width: 0px" /></a></span>
                        </td>
                      </tr>
                      <!-- Start of Email Body-->
                      <tr>
                        <td class="one-column" style="
                          padding-top: 0;
                          padding-bottom: 0;
                          padding-right: 0;
                          padding-left: 0;
                          background-color: #fafafa;
                        ">
                          <table style="border-spacing: 0" width="100%">
                            <tbody>
                              <tr>
                                <td class="inner contents center" style="padding-top: 15px; text-align: left">
                                  <div style="
                                    background-color: #fafafa;
                                    padding: 5px 20px;
                                  " class="container">
                                    <h2>Invoice Cemetery</h2>
                                    <hr />
                                    <div class="description" style="font-size: 15px">
                                      Dear <b>'.$name.'</b>,
                                      <br><br>
                                      I hope this email finds you well. I am writing to remind you about the outstanding bill for <b>'.$product.'</b> with a total amount of 2000 pesos.
                                      <br><br>
                                      Attached to this email, you will find a copy of your invoice for reference, with the following information:
                                      <br>
                                      - Invoice Number : '.$reference.'<br>
                                      - Amount Due : '.$price.'<br>
                                      <br><br>
                                      Please take the necessary actions to settle this bill as soon as possible. If you have already made the payment, please disregard this email.
                                      <br>
                                      If you have any questions or concerns, please do not hesitate to reach out to us. We are always here to help.
                                      <br>
                                      Thank you for your prompt attention to this matter.
                                      <br><br>
                                      Best regards,<br>
                                      Cemetery Team<br><br>
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
                              <nobr><a class="tel" href="tel:09556038102" style="color: #a1a8ad; text-decoration: none"
                                  target="_blank"><span style="white-space: nowrap">0955-603-8102</span></a></nobr>
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
                              <a href="mailto:'.$email.'"
                                style="color: #a1a8ad; text-decoration: underline" target="_blank">Cemetery Memorial</a>
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
                              Copyright © 2023 - 2024
                              <span style="white-space: nowrap">
                                Cementery Web ​</span>,
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
        $response = (object) [
            'status' => 'success',
            'message' => "Successfully Sent",
          ];
    } else {
        $response = (object) [
            'status' => 'error',
            'message' => "Failed to Send.",
          ];
    }

    $response = (object) [
      'status' => 'success',
      'message' => "Successfully Sent.",
    ];
  } else {
    $response = (object) [
      'status' => 'error',
      'message' => "Something went wrong.",
    ];
  }

  echo (json_encode($response));
} else {
  echo ("Invalid request");
}
