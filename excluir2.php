<html>
<head>
</head>
<body>
<?php
 	include("cnx.php");
 	$id=$_GET['id'];

 		if($excluir=mysqli_query($cnx,"delete from pizzaria where id = '$id'")){
 			echo "Pedido excluido com sucesso!";
 			echo "<a href='visualizar.php'>Voltar</a>";
 	 		}

 		else
 		
 	{
 	    echo mysqli_error($cnx);
 	}

?>

	
</body>
</html>