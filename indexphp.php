<?php 

session_start();
$no=rand(40000,200000);
$_SESSION["noo"]=$no;
if (isset($_POST["Submit"])) {
	# code...
  $to = $_POST["email"];
  $_SESSION["remail"]=$to;
 $subject="Confirmation mail";
  $message ="Dear user your OTP is:";
 $message .=$no;

 $header="vivekjoshi84392@gmail.com";

 mail($to, $subject, $message,$header);
echo "$to";
}

 //header("Location: http://localhost/randommailphp/confirm.php");
?>
