<?php
if(isset($_POST['submit'])) {
    // Récupérer les valeurs des champs de saisie
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Adresse e-mail à laquelle envoyer le message
    $to = "louisehretpro@gmail.com";
    
    // Entête du message
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Contenu du message
    $content = "Nom: ".$name."<br>";
    $content .= "Email: ".$email."<br>";
    $content .= "Sujet: ".$subject."<br>";
    $content .= "Message: ".$message;
    
    // Envoyer l'e-mail
    if(mail($to, $subject, $content, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer plus tard.";
    }
}
?>
