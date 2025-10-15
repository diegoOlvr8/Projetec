<?php 
$usuario=$_POST['usuarios']?? '';
$senha=$_POST['senhas']?? '';
$confirmacao=$_POST['confirmar']?? '';

if ($confirmacao===$senha){
    echo "senhas iguais";
    header('Location:https://diegoolvr8.github.io/Projetec/projetec/Login.html');
}
?>
