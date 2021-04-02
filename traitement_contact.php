<?php 


$email = $_POST['email'];
$content = $_POST['content'];
$object = "Demande de renseignement site Jeremy Kerckhove";
$to = "contact@jeremy-kerckhove.com";
$errors = [];

if(empty($email) || !isset($email))   {
    $errors['email'] = "Vous n'avez pas renseigné votre e-mail.";
}

if(empty($content) || !isset($content)) {
    $errors['content'] = "Vous n'avez pas fait de demande.";
}
if(!empty($content) && strlen($content) < 10) {
    $errors['countmail'] = "Votre demande doit contenir au moins 10 caractères.";
}


if(!empty($errors)) {
    session_start();
    $_SESSION['errors'] = $errors;
    header('Location:index.php#contact');
}else {
    $content = wordwrap($content, 70, "\r\n");
    session_start();
    $headers = 'From: ' .$email. '.';
    mail($to,$object,$content, $headers);
    $_SESSION['success'] = "Votre mail à bien été envoyé, je reviendrai vers vous d'ici peu.";
    header('Location:index.php#contact');

}

var_dump($email, $content);
var_dump($errors);
?>