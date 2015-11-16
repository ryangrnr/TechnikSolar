<?php
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");

$name       = @trim(stripslashes($_POST['name']));
$from       = @trim(stripslashes($_POST['email']));
$subject    = @trim(stripslashes($_POST['subject']));
$message    = @trim(stripslashes($_POST['message']));
$to   		= 'ryalwyn@techniksolar.com';//replace with your email
error_log("The email we are sending to is: ".$to);
error_log("The name is: ".$_POST['name']);
error_log("The from is:".$from);
error_log("The subject is: ".$subject);
error_log("The message is: ".$message);

$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers.= "From: {$name} <{$from}>\r\n";
$headers.= "Reply-To: <{$from}>\r\n";
$headers.= "X-Mailer: PHP/".phpversion()."\r\n";
error_log("The headers are: ".$headers);


$success = mail($to, $subject, $message, $headers);
if(!$success) {
  error_log("Recieved non success from mail");
}
else {
  error_log("Recieved success from mail");
}
?>
