<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <style>
body{
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 73%, rgba(10,212,255,40) 100%);
color:#fff;
font-family: 'Cabin', sans-serif;
}
.container{
    margin:auto;
    max-width: 600px;
}
.container a{
   text-decoration: none;
   background-color:darkorange;
   padding:5px;
   border-radius: 5px; 
}
.titulo{
    margin:auto;
    text-align: center;
    margin-bottom: 50px;
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
session_start();
$totalt = null;
if (!isset($_SESSION['itens'])){
$_SESSION['itens'] = array();
}
if (isset($_GET['add']) && $_GET['add'] =="carrinho"){
 //adiciona ao carrinho
    $idProduto = $_GET['id'];
    if (!isset ($_SESSION['itens'][$idProduto]))
    {
        $_SESSION['itens'][$idProduto] = 1;
    }else{
        $_SESSION['itens'][$idProduto] += 1;
    }
}
// exibe o carrinho
if (count($_SESSION['itens']) == 0) {
    echo "Carrinho está Vazio!<br><br><a href='index.php'> Adicionar itens</a>";
}else{

    $_SESSION['dados']= array();
    //include('conexao.php');
    $conexao = new PDO('mysql:host=localhost;dbname=db_senac','root','joao123');
    foreach($_SESSION['itens'] as $idProduto => $quantidade)
    {
    $select = $conexao -> prepare("select * from produtos where id=?");
    $select->bindParam(1,$idProduto);
    $select -> execute();
    $produtos = $select ->fetchAll();
    //var_dump($produtos);
    $total= $quantidade * $produtos[0]["preco"];
    $totalt +=  $total;
    echo   'Nome: '.$produtos[0]["nome"].'<br>
            Preço: '.number_format($produtos[0]["preco"] ,2,",",".").'<br>
            Quantidade: '.$quantidade.'<br>
            Total : '.number_format($total ,2,",",".").'<br><br>
  <a href="remover.php?remover=carrinho&id='.$idProduto.'">Remover</a><br><br><br><hr>';

  array_push($_SESSION['dados'],
  array('id_produto' => $idProduto,
  "quantidade" => $produtos[0]['quantidade'],
  'preco' =>$produtos[0]['preco'],
  'total' => $total
  )
    );
 }
 echo "<strong style='color:orange'>Total = R$".number_format($totalt ,2,",",".").'<br><br></strong>';
 echo "<a style='background-color:green'; href='index.php'> Adicionar mais produtos</a>";
//botão para finalizar o pedido
echo "<br><br><a href='finalizar.php' class='link'>Finalizar Pedido</a>";



}
?>

</div>
</body>
</html>