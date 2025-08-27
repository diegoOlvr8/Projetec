<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conexao=mysqli_connect("localhost","root","","banco_dos_cria")
    or die ("Erro ao se conectar." .mysqli_connect_error());
    mysqli_query($conexao,"comando") 

    $sql="INSERT INTO ambiente_compartilhado(Codigo_de_acesso) VALUES ('$Codigo_de_acesso')";

    quarto={"Arrumar a cama","Trocar a roupa de cama","Guardar as roupas limpas","Dobrar as roupas",
            "Separar as roupas sujas","Limpar os móveis","Organizar armário","Varrer o chão",
            "Passar pano no chão","Organizar gavetas","Limpar espelho","Recolher o lixo do quarto"
            }
    sala=
    banheiro=
    cozinha=

    


    ?>
</body>

</html>



