<html>
<head></head>
<body>
<?php
include ("cnx.php");

$nome=$_GET['nome'];
$pizza=$_GET['sabor'];
$refresco=$_GET['bebida'];
$id=$_GET['id'];

	if($editar=mysqli_query($cnx, "update pizzaria set nome='$nome', sabor='$pizza', bebida='$refresco' where id='$id'")){
		echo "Dados alterados com sucesso!";
		echo "<a href='visualizar.php'>Voltar</a>";
	}
	else
	{
		echo mysqli_error();
	}
?>
</body>
</html>