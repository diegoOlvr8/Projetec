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
    <input type="text" name="a"><br>
    <input type="password" name="b">
    <input type="submit" name="Entrar" value="Entrar">
    <input type="submit" name="Criar" value="Criar">
</form>

<?php
$user=$_POST['a'];
$senha=$_POST['b'];

$usuarios=['Davi','Diego'];
$senhas=['12345678','senha123'];

$posicao=array_search($user,$usuarios);

function Criar(){
array_push($usuarios,$user);
array_push($senhas,$senha);
}

function Entrar(){  
if (strlen($senha)<8){
    echo "Sua senha deve ter no minimo 8 digitos";
}


if ($senha===$senhas[$posicao]){
    echo "Login feito com sucesso";
    header('Location:https://diegoolvr8.github.io/Projetec/projetec/Pagina_inicial.html');
}
else{
    echo "Senha indisponivel";
}
}

if (isset($_POST['Entrar'])){
    Entrar();
}

if (isset($_POST['Criar'])){
    Criar();
}


?>
</body>
</html>
