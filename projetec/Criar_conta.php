<?php
$file = 'usuarios.txt';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['usuarios'] ?? '';
    $senha = $_POST['senhas'] ?? '';
    $confirmar = $_POST['confirmar'] ?? '';

    if ($senha !== $confirmar) {
        echo "As senhas não coincidem.";
        exit;
    }

   
    $dados = "$email:$senha\n";
    file_put_contents($file, $dados, FILE_APPEND);
    
    echo "Conta criada com sucesso!";
    header('Location:https://diegoolvr8.github.io/Projetec/projetec/Login.html'); 
}
?>
