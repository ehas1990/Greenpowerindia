<?php
error_reporting(E_ERROR | E_PARSE);
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];

$message= $_POST['message'];
$subject=$_POST['subject'] ;

 $to="ehas@a2zalphabetsolutionz.com" ;

$txt ="Name : ". $name . "\r\n phone : " . $phone .  "\r\n Message : ". $message ;

$headers = "From:" . $email;
 $status = null;
if(mail($to,$subject,$txt,$headers)) {
 
$status=1;

} else {
    $status=0;
}
header("Location:index.php?s=".$status);
exit;
?>