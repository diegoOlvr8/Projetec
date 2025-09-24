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
    <input type="submit" value="Enviar">
</form>

<?php
$user=$_POST['a'];
$senha=$_POST['b'];

$usuarios=["bernardin rei delas","Douglas"];
$senhas=[12345678,87654321];

$posicao=array_search($user,$usuarios);

if ($usuarios[$posicao]===$senha){
    echo "login certo";
}
else{echo "deu erro";}


if (in_array($senha,$senhas)){
    echo "login certo";
}
else{echo "deu erro";}

?>
</body>
</html>
