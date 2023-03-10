<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Eletroninho</title>
</head>
<style>
body{
    background-color: #a5a2a2;
    margin: 0 auto;
    padding: 40px 40px;


}
    .btn{

padding: 2px 19px;
background:#a0a0a0;
color:#000000;
border-radius: 10px;
font-weight: 500;
font-size: 14px;
margin-left: 10px;
margin-top: -10px;
text-decoration: none;


}

.btn:hover{
background: #ffffff;
transform: scale(1.1);

}
</style>

<body>

<?php
    include_once("conexao.php");
   
    $produto = $_POST["produto"];
    $tipo = $_POST["tipo"];
    $modelo = $_POST["modelo"];
    $defeito = $_POST["defeito"];
    $cliente = $_POST["cliente"];
    $telefone = $_POST["telefone"];

    
    $result_produtos= "INSERT INTO produtos(produto, tipo, modelo, defeito, cliente, telefone)
                    VALUES ('$produto','$tipo', '$modelo', '$defeito', '$cliente', '$telefone')";
    $resultado_produtos= mysqli_query($conn, $result_produtos);
   
    if(mysqli_affected_rows($conn) != 0){
        echo "Produto cadastrado com sucesso";
    }   

      
      

        else{
                echo "Erro ao cadastrar";
                   
                 
            }
            
            ?>
<br>
<br>
<a href="cadproduto.html" class="btn">VOLTAR</a>

</body>
