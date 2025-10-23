<?php
if (isset($_POST['Entrar'])) {
    $email = $_POST['usuarios'];
    $senha = $_POST['senhas'];

    
    $arquivo = 'usuarios.txt';

    if (file_exists($arquivo)) {
        $usuarios = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $loginValido = false;

        foreach ($usuarios as $usuario) {
            list($emailSalvo, $senhaSalva) = explode(";", $usuario);
            if ($email === $emailSalvo && $senha === $senhaSalva) {
                $loginValido = true;
                break;
            }
        }

        if ($loginValido) {
            header('Location:https://diegoolvr8.github.io/Projetec/projetec/home.html');
            exit();
        } else {
            echo "<script>alert('Email ou senha incorretos!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Arquivo de usuários não encontrado!'); window.history.back();</script>";
    }
}
?>
















