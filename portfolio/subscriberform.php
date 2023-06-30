<?php
// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Adresse e-mail de destination
$to = "nicolas.carrara01@gmail.com";

// Sujet de l'e-mail
$subject = "Nouveau message de contact";

// Corps de l'e-mail
$body = "Nom: " . $name . "\n";
$body .= "E-mail: " . $email . "\n";
$body .= "Message: " . $message . "\n";

// En-têtes de l'e-mail
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

// Envoi de l'e-mail
if (mail($to, $subject, $body, $headers)) {
    // Succès de l'envoi de l'e-mail
    echo "<script>alert('E-mail envoyé avec succès !'); window.location.href = 'index.html';</script>";
} else {
    // Échec de l'envoi de l'e-mail
    echo "<script>alert('Une erreur s'est produite lors de l'envoi de l'e-mail. Veuillez réessayer plus tard.'); window.location.href = 'index.html';</script>";
}
?>
