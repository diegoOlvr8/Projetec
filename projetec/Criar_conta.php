<?php 
$criar_usuario=$_POST['usuarios']?? '';
$criar_senha=$_POST['senhas']?? '';
$confirmacao=$_POST['confirmar']?? '';

if ($confirmacao===$criar_senha){
    echo "senhas iguais";
    header('Location:https://diegoolvr8.github.io/Projetec/projetec/Login.html');
}

if ($confirmacao!==$criar_senha){
    echo "senhas diferentes";
    header('Location:https://diegoolvr8.github.io/Projetec/projetec/profile.html');
}
?>

