<?php $name = $_POST['user_name'];
$email = $_POST['user_email'];
$telephone = $_POST['user_telephone'];
$message = $_POST['usermessage'];
$formcontent="From: $name \n Message: $message";
$recipient = "vrodriguez10@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader, $telephone) or die("Error!");
echo "Thank You!" . " -" . "<a href='aboutus.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>