
<?php

session_start();

$no=$_SESSION['noo'];
if (isset($_POST["Submit"])) {
	
$noo=$_POST['otp'];
if ($no!=$noo) {
	//header("Location: http://localhost/randommailphp/index.php");
	echo "=Wrong OTP Entered";
}
else {
	header("Location: http://localhost/randommailphp/url.php");
	
}
}
?>