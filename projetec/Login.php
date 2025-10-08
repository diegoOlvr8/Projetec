<?php
session_start();
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if (!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios']=[];
    $_SESSION['senhas']=[];
}

$usuarios_registrados=&$_SESSION['usuarios'];
$senhas_registradas=&$_SESSION['senhas'];


function Entrar($usuario,$senha,&$usuarios_registrados,&$senhas_registradas){
    $posicao_usuario=array_search($usuario,$usuarios_registrados);


    if ($posicao_usuario===false){
        echo "Usuario não encontrado";
        return;
    }
    if ($senha===$senhas_registradas[$posicao_usuario]){
        echo "Login feito com sucesso";
        header('Location:https://diegoolvr8.github.io/Projetec/projetec/Pagina_inicial.html');
    }
    else{
        echo "Senha Incorreta";
        return;
    }
}
if (isset($_POST['Entrar'])){
    Entrar($usuario,$senha,$usuarios_registrados,$senhas_registradas);
}

function Criar($usuario,$senha,&$usuarios_registrados,&$senhas_registradas){
    $posicao_senha=array_search($senha,$senhas_registradas);  
    if ($posicao_senha===true){
        echo "Usuario ja existente";
        return;
    }

    array_push($usuarios_registrados,$usuario);
    array_push($senhas_registradas,$senha);
    header('Location:https://diegoolvr8.github.io/Projetec/projetec/Login.html');
}

if (isset($_POST['Criar'])){
    Criar($usuario,$senha,$usuarios_registrados,$senhas_registradas);
}
?>



