<?php
if (isset($_POST['Criar'])) {
    $email = $_POST['usuarios'];
    $senha = $_POST['senhas'];
    $confirmar = $_POST['confirmar'];

    if ($senha !== $confirmar) {
        echo "<script>alert('As senhas não coincidem!'); window.history.back();</script>";
        exit();
    }

    
    $arquivo = 'usuarios.txt';

  
    $linha = $email . ";" . $senha . PHP_EOL;
    file_put_contents($arquivo, $linha, FILE_APPEND);

    
    header('Location:https://diegoolvr8.github.io/Projetec/projetec/Login.html');
    exit();
}
?>
