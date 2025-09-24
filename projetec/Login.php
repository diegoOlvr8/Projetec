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


