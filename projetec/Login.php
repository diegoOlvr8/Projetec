<?php
session_start();


$file = 'usuarios.txt';

function Criar(){
    header('Location:https://diegoolvr8.github.io/Projetec/projetec/Criar_conta.html');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuarios'] ?? '';
    $senha = $_POST['senhas'] ?? '';}

function Entrar($usuario,$senha,&$usuarios_registrados,&$senhas_registradas){
    $posicao_usuario=array_search($usuario,$usuarios_registrados);
   
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
        header('Location:https://diegoolvr8.github.io/Projetec/projetec/home.html'); 
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>















