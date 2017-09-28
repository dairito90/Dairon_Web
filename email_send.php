<?php
// if(isset($_POST['submit'])){
//
// }

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];


$to='dairolrpichardo90@gmail.com';
$subject='Website Message';
$message="Name: ".$name."\n"."Wrote the following: "."\n\n".$msg;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)) {
    echo "<h1>Sent Successfully! Thank you"." ".$name.",I appreciate your interest!</h1>";
}
else{
    echo "Something went wrong!";
}

?>
