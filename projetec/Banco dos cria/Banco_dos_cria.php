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

cozinha{
        "Lavar a louça", "Secar e guardar a louça", "Limpar o fogão",
        "Limpar a geladeira (parte externa)", "Limpar a geladeira (parte interna)",
        "Jogar o lixo fora", "Tirar o lixo reciclável", "Limpar armários por dentro",
        "Limpar armários por fora", "Varrer o chão", "Passar pano no chão", "Limpar a pia",
        "Organizar as compras na despensa", "Descongelar e limpar o freezer",
        "Limpar micro-ondas por dentro/fora", "Organizar gavetas"
          },
          
quarto{
        "Arrumar a cama", "Trocar a roupa de cama", "Guardar roupas limpas", "Dobrar roupas",
        "Separar roupas sujas", "Limpar móveis (poeira)", "Organizar armário",
        "Limpar ventilador/ar-condicionado", "Varrer o chão", "Passar pano no chão",
        "Organizar gavetas", "Limpar espelhos", "Aspirar o colchão", "Virar o colchão",
        "Recolher lixo do quarto"
    },
    
banheiro{
        "Limpar o vaso sanitário", "Limpar o box", "Limpar os azulejos", "Limpar o espelho",
        "Limpar a pia", "Limpar o chão", "Trocar toalhas", "Trocar papel higiênico",
        "Lavar tapetes", "Jogar lixo fora", "Organizar produtos de higiene",
        "Lavar o ralo", "Tirar cabelos do ralo"
    },
          
salaestar{
  "Tirar o pó dos móveis e superfícies",
  "Aspirar ou varrer o chão",
  "Passar pano no chão",
  "Organizar almofadas, mantas e objetos",
  "Limpar janelas e vidros",
  "Limpar aparelhos eletrônicos (TV, controles, etc.)",
  "Lavar cortinas ou limpar persianas",
  "Limpar ventiladores, lustres ou luminárias",
  "Desinfetar controles remotos e maçanetas",
  "Retirar lixo ou papéis acumulados"
          },

areadeservico: {
  "Lavar e estender roupas",
  "Passar roupas",
  "Dobrar e guardar roupas",
  "Limpar o tanque",
  "Limpar a máquina de lavar",
  "Organizar produtos de limpeza",
  "Varrer e passar pano no chão",
  "Tirar o pó de prateleiras e armários",
  "Esvaziar e limpar cestos de roupa suja",
  "Separar roupas para doação ou descarte"
},

garagem{
  "Varrer o chão",
  "Remover teias de aranha",
  "Organizar ferramentas e objetos",
  "Lavar o chão (se necessário)",
  "Limpar portas e janelas",
  "Lavar o carro",
  "Jogar fora objetos quebrados ou inúteis",
  "Separar itens para doação ou reciclagem",
  "Revisar prazos de validade de produtos armazenados",
  "Verificar iluminação (trocar lâmpadas queimadas)"
    },

varanda{
  "Varrer e passar pano no chão",
  "Regar plantas",
  "Podar plantas",
  "Limpar vasos e suportes",
  "Limpar parapeitos e grades",
  "Tirar pó de móveis e objetos decorativos",
  "Lavar tapetes ou capachos",
  "Limpar janelas e vidros",
  "Recolher folhas secas",
  "Organizar cadeiras, mesas e itens de lazer"
    },

jardim{ 
  "Cortar a grama",
  "Podar arbustos e árvores",
  "Regar as plantas",
  "Remover ervas daninhas",
  "Adubar o solo",
  "Plantar novas mudas ou sementes",
  "Recolher folhas secas",
  "Limpar ferramentas de jardinagem",
  "Organizar vasos e canteiros",
  "Verificar e ajustar sistemas de irrigação"
    },
 
    
    


    ?>
</body>

</html>







