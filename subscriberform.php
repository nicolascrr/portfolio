<?php 
if(isset($_POST['submit'])){
    $to = "nicolas.carrara01@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message = name . " " . "\n\n" . $_POST['message'];

    $headers = "Message :" . $message;
    mail($to,$from,$headers);
	echo '<script>alert("Message envoyé !")</script>';
    header('Location: index.html');
    }
?>