<?php
include("conexao.php");
$id = $_GET["id"];
settype($id, "integer");

$sql = "select * from cliente where id = $id";
$query = mysqli_query($conn, $sql);
$dados  = mysqli_fetch_array($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta charset="utf-8">
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Atualizar Cliente - Eletroninho</title>

<style>


body {
  background-color: rgb(194, 193, 193);;
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
  table-layout:auto ;
  font-family: 'Questrial', sans-serif;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);


}

input{
  width:80%;

}

table {
  width: 60%;


}

td{
  background-color:#fff  ;
    color: #;
    opacity: 70%;
    font-family: 'Questrial', sans-serif;
    
}



h2 {
  text-align: center;
    margin-bottom: 25px;
    font-size: 1.8rem;
    font-weight: 300;
    font-family: 'Questrial', sans-serif;


}

</style>
</head>

<body>
<form id="cadcliente.html" name="cadcliente" method="post" action="edicao_cliente.php">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
  <h2>EDIÇÃO DE CADASTRO DE CLIENTES</h2>
  <table width="390" border="1px" align="center">
    <tr>
      <td width="165">Nome</td>
      <td width="209"><input name="Nome" type="text" id="Nome" value="<?php echo $dados["Nome"];?>" /></td>
    </tr>
       <tr>
      <td>RG</td>
      <td><input name="RG" type="text" id="RG" value="<?php echo $dados["RG"];?>" /></td>
    </tr>
	<tr>
      <td>CPF</td>
      <td><input name="CPF" type="text" id="CPF" value="<?php echo $dados["CPF"];?>" /></td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="Pai" type="text" id="Pai" value="<?php echo $dados["Pai"];?>" /></td>
    </tr>
	<tr>
      <td>Mãe</td>
      <td><input name="Mãe" type="text" id="Mãe" value="<?php echo $dados["Mãe"];?>" /></td>
    </tr>
	<tr>
      <td>E-Mail</td>
      <td><input name="Email" type="text" id="Email" value="<?php echo $dados["Email"];?>" /></td>
    </tr>
	<tr>
      <td>Telefone</td>
      <td><input name="Telefone" type="text" id="Telefone" value="<?php echo $dados["Telefone"];?>" /></td>
    </tr>
    <tr>
	  <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Gravar" style="cursor:pointer"/></td> 
    </tr>
    </table>
    </form>
    </body>
    </html>