<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <style>
body{
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 63%, rgba(10,212,255,40) 100%);
color:#fff;
font-family: 'Cabin', sans-serif;
}
.container{
    margin:auto;
    max-width: 600px;
}
.container a{
   text-decoration: none;
   background-color:aqua;
   padding:5px;
   border-radius: 5px; 
}
.titulo{
    margin:auto;
    text-align: center;
    margin-bottom: 50px;
}
.imagens_produtos{
    height: 200px;
    width: 400px;
}
#nome{
    background-color: transparent;
}
        </style>
</head>
<body>
    <div class="titulo">
        <h2> Carrinho de Compras</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
    </div>
<div class="container">
<?php
 $conexao = new PDO('mysql:host=localhost;dbname=db_senac', 'root', 'joao123');
$select = $conexao-> prepare("select * from produtos");
$select ->execute();
$fet = $select-> fetchAll();
//var_dump($fet);
foreach ($fet as $produto){
    echo "Nome do produto: ".$produto['nome'].'<br>';
    echo "Quantidade: ".$produto['quantidade'].'<br>';
    echo "Preço do produto: ".$produto['preco'].'<br>';
    echo '<a id="nome" href="'.$produto['detalhe'].'"><img src="'.$produto['foto'].'" alt="'.$produto['nome'].'" class="imagens_produtos">'.'</a><br><br>';;
    echo '<a href='.$produto['detalhe'].'> Mais detalhes do produto</a><br><br>';
    echo '<a href="carrinho.php?add=carrinho&id='.$produto['id'].'">
    Adicionar ao carrinho</a><br><br><hr>';
    // var_dump($produto);
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</div>
</body>
</html>