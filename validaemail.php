<?php

$email = trim($_POST['email']);

$file = 'usuarios.txt';

$emails = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$emailExiste = false; 

foreach($emails as $linha){
    list($email_cadastrado) = explode(':', $linha);
    if($email === $email_cadastrado) {
        $emailExiste = true;
        break;
    }
}

if ($emailExiste) {
    header('Location: crieconta.php?erro=email');
    exit();
} else {
    echo 'Este email está disponível.';
}



?>
