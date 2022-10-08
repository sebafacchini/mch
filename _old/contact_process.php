<?php

/* Exception class. */
require 'PHPMailer/exception.php';

/* The main PHPMailer class. */
require 'PHPMailer/PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = new PHPMailer(TRUE);

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

/*SMTP Parameters*/

/* Tells PHPMailer to use SMTP. */

  $mail->isSMTP();

  /* SMTP server address. */
  $mail->Host = 'ssl0.ovh.net';

  /* Use SMTP authentication. */
  $mail->SMTPAuth = "true";

  /* Set the encryption system. */
  $mail->SMTPSecure = "ssl";

  /* Set the SMTP port. */
  $mail->Port = 465;

  /* SMTP authentication username. */
  $mail->Username = "info@moscountryhouse.com";

  /* SMTP authentication password. */
  $mail->Password = "Vojandes94";


/* Open the try/catch block. */
try {
   /* Set the mail sender. */
   $mail->setFrom("info@moscountryhouse.com");

   /* Add a recipient. */
   $mail->addAddress("info@moscountryhouse.com", "Contact Form");

   /* Set the subject. */
   $mail->Subject = 'Force';

   /* Set the mail message body. */
   $mail->Body = "ciao sono una mail di test";

   /* Finally send the mail. */
   if ( $mail->Send() ) {
        echo "Email sent..!";
      }else {
          echo "Error."
      }

// /* Closing smtp connection*/
//     $mail->smtpClos();
//
// catch (Exception $e)
// {
//    /* PHPMailer exception. */
//    echo $e->errorMessage();
// }
// catch (\Exception $e)
// {
//    /* PHP exception (note the backslash to select the global namespace Exception class). */
//    echo $e->getMessage();
// }
//
//////////////////////////////////////////////////////////


    // $to = "info@moscountryhouse.com";
    // $from = $_REQUEST['email'];
    // // $name = $_REQUEST['name'];
    // $subject = $_REQUEST['subject'];
    // $number = $_REQUEST['number'];
    // $cmessage = $_REQUEST['message'];
    // $from = $_POST['email'];
    // $name = $_POST['name'];
    // $subject = $_POST['subject'];
    // $number = $_POST['number'];
    // $cmessage = $_POST['message'];

    // $headers = "From: $from";
	//   $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $from . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // $subject = "You have a message from your Bitmap Photography.";

    // $logo = 'img/logo.png';
    // $link = '#';

	// $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	// $body .= "<table style='width: 100%;'>";
	// $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	// $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	// $body .= "</td></tr></thead><tbody><tr>";
	// $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	// $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	// $body .= "</tr>";
	// $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	// $body .= "<tr><td></td></tr>";
	// $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	// $body .= "</tbody></table>";
	// $body .= "</body></html>";

// if($from!=NULL) {
//     // $send = mail($to, $subject, $body, $headers);
//     mail($to, $subject, $headers, $cmessage);
// }

    // header("Location:index.html");
?>
