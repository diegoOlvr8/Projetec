<?php
session_start();

// Arquivo com os usuários e senhas
$file = 'usuarios.txt';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuarios'] ?? '';
    $senha = $_POST['senhas'] ?? '';

    // Carregue os dados do arquivo
    $usuarios = file($file, FILE_IGNORE_NEW_LINES);

    $login_valido = false;
    
    foreach ($usuarios as $linha) {
        list($email, $stored_password) = explode(':', $linha);

        if ($usuario === $email && $senha === $stored_password) {
            $login_valido = true;
            break;
        }
    }

    if ($login_valido) {
        $_SESSION['usuario'] = $usuario;
        echo "Login realizado com sucesso!";
        header('Location: home.php'); // Redireciona para a página principal
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>










