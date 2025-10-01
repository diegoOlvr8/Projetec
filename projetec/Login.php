<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Login.php" method="post">
    <img src="" alt="">
    <input type="text" name="usuario"><br>
    <input type="password" name="senha"> <br> <br>
    <input type="submit" name="Entrar" value="Entrar">
    <input type="submit" name="Criar" value="Criar">
</form>

<?php
session_start();
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

if (!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios']=[];
    $_SESSION['senhas']=[];
}

$usuarios_registrados=&$_SESSION['usuarios'];
$senhas_registradas=&$_SESSION['senhas'];


function Entrar($usuario,$senha,&$usuarios_registrados,&$senhas_registradas){
    $posicao=array_search($usuario,$usuarios_registrados);

    if ($senha===$senhas_registradas[$posicao]){
        echo "Login feito com sucesso";
        header('Location:https://diegoolvr8.github.io/Projetec/projetec/Pagina_inicial.html');
    }
    else{
        echo "Senha Incorreta";
    }
}
if (isset($_POST['Entrar'])){
    Entrar($usuario,$senha,$usuarios_registrados,$senhas_registradas);
}

function Criar($usuario,$senha,&$usuarios_registrados,&$senhas_registradas){
    array_push($usuarios_registrados,$usuario);
    array_push($senhas_registradas,$senha);

}

if (isset($_POST['Criar'])){
    Criar($usuario,$senha,$usuarios_registrados,$senhas_registradas);
}

?>
</body>
</html>
