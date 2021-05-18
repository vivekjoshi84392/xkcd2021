<?php

session_start();

         $to = $_SESSION["remail"];

         // if email address is not right
         if (filter_var($to,FILTER_VALIDATE_EMAIL) === false) {

         
         	header("Location: http://localhost/randommailphp/user.php");
         }
         else{

//generating link of image in local variable

$num=rand(100,2000);
$link=("http://xkcd.com/$num/info.0.json");
$json = file_get_contents($link);
$json_data = json_decode($json, true);
$message=  $json_data["img"];    //link of actual img

$subject ="XKcd";                       //subject of email
$headers ="vivekjoshi84392@gmail.com";  //sender image
$headers  .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message = " $message <html><head>
<title>image</title>
</head>
<body>
<img src=\"$message\">   
</body>";

/// to check if email send succesfully
$reteval=mail($to, $subject , $message,$headers);
if( $reteval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

}


//saving the file into local system
/*
echo "$num";
$saveto='image/$num.png';
$ch=curl_init($message);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
$raw=curl_exec($ch);
curl_close($ch);


// if file already exist then updadte it
if (file_exists($saveto)) {
	unlink($saveto);
}


$fp=fopen($saveto, 'x');
fwrite($fp, $raw);
fclose($fp);


*/



?>




