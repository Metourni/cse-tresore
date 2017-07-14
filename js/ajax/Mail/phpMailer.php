<?php
/**
 * Created by PhpStorm.
 * User: Noureddine Metourni
 * Date: 20/02/2017
 * Time: 01:15
 */
require_once 'PHPMailerAutoload.php';
function mailTo($sender_name , $sender_email , $sender_subject,$sender_message )
{

    $mail = new  PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hackitcse.dz@gmail.com';                 // SMTP username
    $mail->Password = 'cseesi2017';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom($sender_email, $sender_subject);
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('correctech.dz@gmail.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $sender_subject;
    $mail->Body    = '
    <html>
     <head>
      <title>'.$sender_subject.'</title>
     </head>
     <body>
     <br>From : '.$sender_name.'</$'.$sender_email.'>
     <br>Subjuct : '.$sender_subject.'
     <br>Message : <br>
      <p>'.$sender_message.'</p>
     </body>
    </html>
    ';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        return true;
    } else {
        return false;
    }

}
