<?php
session_start();
$php_self = $_SERVER['PHP_SELF'];
// on submit
if( isset($_POST[name]) && isset($_POST[email]) && isset($_POST[message]) && isset($_POST[captcha]) ){
    $name = $_POST[name];
    $email = $_POST[email];
    $message = $_POST[message];
    $captcha = $_POST[captcha];
     
    $error = 0;
    // name
    if( $name == "" ){ $error ++; $error_name = "class='error'"; }
    // email
    if( $email == "" ){ $error ++; $error_email = "class='error'"; }
    // message
    if( $message == "" ){ $error ++; $error_message = "class='error'"; }
    // captcha
    if( $captcha == "" || $captcha != $_SESSION[captcha]){ $error ++; $error_captcha = "class='error'"; }
 
    // no error, send email
    if( $error == 0){               
                         
        // your email address
        $address = "harika@nipponitsolutions.com";
         
        // email subject
        $subject = "New message";
        // email content
        $content = "<strong>Name:</strong><br/>$name<br/><strong>Email address:</strong><br/><strong>Message:</strong><br/>$email<br/>$message";
        // html email
        $email_content = "<!doctype html><head><meta charset='utf-8'><title>".$subject."</title>";
        $email_content .= "</head><body>";
        $email_content .= $content;
        $email_content .= "</body></html>";                     
                 
        // headers for html email
        $headers  = 'MIME-Version: 1.0' . "/r/n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "/r/n";
        $headers .= "From: $email" . "/r/n";
        // send email
        mail($address, $subject, $email_content, $headers);         
         
        // reset variables
        $name = ""; $email = ""; $message = "";
        $mail_sent = 1;                                                             
    }
}
 
// captcha
$num = rand(1, 20);
$num2 = rand(1, 9);     
$verif = $num . "+" . $num2;
$_SESSION[captcha] = $num + $num2;      
 
if( $mail_sent == 1 ){
    echo "<h1>Thank you for your message! We'll be in touch soon.</h1>";
} else {
    echo "Fail!!!";
}
?>