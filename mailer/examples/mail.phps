<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('marcelogheiler@gmail.com', 'Marcelo Gheiler');
//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('marcelogheiler@gmail.com', 'Marcelo Gheiler');
//Set the subject line
$mail->Subject = 'Mail Test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('main.hmtl'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'Please support Young Musicians through Give Miami Day';
//Attach an image file

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
