<?php
session_set_cookie_params(0); 
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$file = 'usuarios.txt';
$usuarios = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$login_valido = false;

foreach ($usuarios as $usuario) {
    list($email_cadastrado, $senha_cadastrada) = explode(':', $usuario);

    if ($email === $email_cadastrado && password_verify($senha, $senha_cadastrada)) {
        $login_valido = true;
        break;
    }
}

if ($login_valido) {
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
} else {
    header('Location: index.php?login=erro');
}

exit();
