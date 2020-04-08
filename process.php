<?php

if(isset($_POST['email'])){

// Email information
$admin_email = "youremailid@abc.com";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Send email

mail($admin_email, "New Email", $message . '-' . $phone, "From:". $email);

header('Location: thankyou.html');

}

?>