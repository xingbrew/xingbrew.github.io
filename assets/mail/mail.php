<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$subject = $_POST{'subject'};
$phone = $_POST{'phone'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Subject: ".$subject."
Phone: ".$phone."
Message: ".$message."

";

mail ("xing@databrew.cc" , "New Message from Uphando", $email_message);
header("location: ../../mail-success.html");
?>
