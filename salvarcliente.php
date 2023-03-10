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
   
    $nome = $_POST["Nome"];
    $rg = $_POST["RG"];
    $cpf = $_POST["CPF"];
    $pai = $_POST["Pai"];
    $mae = $_POST["Mãe"];
    $email = $_POST["Email"];
    $telefone = $_POST["Telefone"];
    
    $result_cliente = "INSERT INTO cliente (Nome, RG, CPF, Pai, Mãe, Email, Telefone)
                    VALUES ('$nome','$rg', '$cpf' ,'$pai', '$mae', '$email', '$telefone')";
    $resultado_cliente = mysqli_query($conn, $result_cliente);
   
    if(mysqli_affected_rows($conn) != 0){
        echo "Cliente cadastrado com sucesso!";
            }else{
                echo "Erro ao cadastrar";
                   
                 
            }
            
?>


<br>
<br>
<a href="cadcliente.html" class="btn">VOLTAR</a>

</body>