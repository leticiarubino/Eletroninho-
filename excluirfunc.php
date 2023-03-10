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
include("conexao.php");
$id = $_GET["id"];
$mysqli = new mysqli("localhost","root","","eletroninho");

$mysqli -> query("SELECT * FROM funcionario");
echo "Total de registros encontrados:" . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM funcionario WHERE id = $id");
echo "<br> Total de registros excluídos: " . $mysqli -> affected_rows;

$mysqli -> close();
?>


<br>
<br>
<a href="listarfunc.php" class="btn">VOLTAR</a>

</body>