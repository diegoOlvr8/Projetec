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
    <input type="text" name="a">
    <input type="password" name="b">
    <input type="submit" value="Enviar">
</form>
<?php
$user=$_POST['a'];
echo "$user";

$senhas=[12345678];
$senha=$_POST['b'];

if (in_array($senha,$senhas)){
    echo "login certo";
}
else{echo "deu erro";}

?>
</body>
</html>
