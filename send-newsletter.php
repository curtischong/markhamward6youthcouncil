<?php
    $lines = file("newsletter-emails.txt");//file into an array
    for($i = 0;i < count($lines);$i++){
        $lines[$i] = substr($lines[$i],strlen($lines[$i]-2));
    }

/*
require '../php_mailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "curtischong5@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "bacon2000";

//Set who the message is to be sent from
$mail->setFrom('curtischong5@gmail.com', 'Misconceptions Team');

//Set an alternative reply-to address
//$mail->addReplyTo('curtischong5@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($useremail, 'John Doe');

//Set the subject line
$mail->Subject = 'Misconceptions - Password Reset';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('forgotpass-email'));
                    
$mail->Body    = "Your reset key is: " . $token."<br>Just put your key <a href='localhost/misconception/main_page/passreset-index.php'> here</a> and type in a new password. Your key will expire in 48 hours";

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}*/
?>