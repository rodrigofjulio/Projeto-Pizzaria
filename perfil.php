<html>
<head>
<title> Visualizar </title>
</head>
<body>
<center>
<a href='Cadastro.html'>Fazer Pedido</a>
<table border='1'>
<tr>
<th>Id</th>
<th>Cliente</th>
<th>Sabor</th>
<th>Refresco</th>
<th colspan='2'>Funções</th>
</tr>
<?php
include ("cnx.php");
$id=$_GET['id'];

$selecionar=mysqli_query($cnx,"select * from pizzaria where id='$id'");
while($montar=mysqli_fetch_array($selecionar))
{ /*faz uma busca para ver se tem algo dentro da tabela*/
	$id=$montar['id'];
	$nome=$montar['nome'];
	$pizza=$montar['sabor'];
	$refresco=$montar['bebida'];
echo"
<tr>
<td>$id</td>
<td><a href='confirmacao.php?id=$id'>$nome</a></td>
<td>$pizza</td>
<td>$refresco</td>
<td>
<a href='editar1.php?id=$id'><img src='img/editar.png' width='20'></a>
</td>
<td>
<a href='excluir1.php?id=$id'><img src='img/excluir.png' width='20'></a>
</td>
</tr>
";
}
?>
</table>
</center>
</body>
</html>