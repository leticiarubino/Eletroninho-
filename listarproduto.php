<?php
include("conexao.php");

$sql = "select * from produtos";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">	

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Produtos - Eletroninho</title>
<style>


body {
  background-color: rgb(194, 193, 193);
    background-size: cover;
    width:100%;
    align-items: baseline;
    justify-content: center;
    padding: 10px;
    min-height: 100vh;
    margin:0;
}

table, th,td {
  border-collapse: collapse;
  padding: 10px 10px;
  table-layout: auto;
  font-family: 'Questrial', sans-serif;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

table {
  width: 80%;

}


td{
  background-color:#fff  ;
    color: #;
    opacity: 70%;
    font-family:secular;
    font-family:Mulish;
    
}

h1{
  text-align: center;
    margin-bottom: 25px;
    font-size: 1.8rem;
    font-weight: 300;
    font-family: sans-serif; 
}
.btn{
    padding: 2px 19px;
    background:#a0a0a0;
    color:#000000;
    border-radius: 10px;
    font-weight: 600;
    font-size: 15px;
    text-decoration: none;
    font-family: 'Questrial', sans-serif;

}

.btn:hover{
    background: #ffffff;
    transform: scale(1.1);

}




</style>
</head>

<body>
  <br>
  <br>
  <br>
  <a href="painel.html" class="btn">VOLTAR</a>


<body>
<?php

if(mysqli_fetch_array($query) < 1) {
  $mysqli->close();
}
?>
<h1><center> LISTA DE PRODUTOS</center></h1>
<div style="overflow-x:auto;">
<table width="" border="" align="center">

<thead>

<tr>
    <th>ID</th>
    <th>PRODUTO</th>
    <th>TIPO DE PRODUTO</th>
    <th>MODELO</th>
    <th>DEFEITO</th>
    <th>NOME DO CLIENTE</th>
    <th>TELEFONE</th>


    <th>EDITAR/EXCLUIR</th>
  </tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
  $id        = $L["id"];
  $produto      = $L["produto"];
  $tipo    = $L["tipo"];
  $modelo    = $L["modelo"];
  $defeito    = $L["defeito"];
  $ncliente   = $L["cliente"];
  $telefone    = $L["telefone"];

  
    echo"
<tbody>
  <tr>
    <td>$id</td>
    <td>$produto</td>
    <td>$tipo</td>
    <td>$modelo</td>
    <td>$defeito</td>
    <td>$ncliente</td>
    <td>$telefone</td>

    <td><button><a href=\"editar_produto.php?id=$id\">EDITAR</a> </button> |
 <button> <a href=\"excluir_produto.php?id=$id\">EXCLUIR</a></button></td>
  </tr>
  </tbody>\n";
}  
?> 
</table>
</div>
</body>
</html>