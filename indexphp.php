<?php 

session_start();

$no=rand(40000,200000);
$_SESSION["noo"]=$no;
if (isset($_POST["Submit"])) {
	ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "vivekjoshi84392@gmail.com");
	# code...
  $to = $_POST["email"];
  $_SESSION["remail"]=$to;
 $subject="Confirmation mail";
  $message ="Dear user your OTP is:";
 $message .=$no;

 $header="vivekjoshi84392@gmail.com";


 


mail($to, $subject, $message, $header);
}
header("Location: http://localhost/randommailphp/confirm.php");


?>