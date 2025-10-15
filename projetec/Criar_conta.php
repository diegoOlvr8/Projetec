<?php 
$criar_usuario=$_POST['criar_usuarios']?? '';
$criar_senha=$_POST['criar_senhas']?? '';
$confirmacao=$_POST['confirmar']?? '';

if ($confirmacao===$criar_senha){
    echo "senhas iguais";
    header('Location:https://diegoolvr8.github.io/Projetec/projetec/Login.html');
}
?>
