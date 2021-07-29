<?php

include('cnx.php'); /*inclui os dados ao banco de dados*/
$nome=$_GET['nome'];
$sabor=$_GET['sabor']; /*envia os dados por meio de Get para a outra pagina*/
$bebida=$_GET['bebida'];
	if($inserir=mysqli_query($cnx,"insert into pizzaria (nome,sabor,bebida) values ('$nome','$sabor','$bebida')"))
	{ /* insere os dados  na tabela criada*/
		echo"Dados inseridos com sucesso!<br>";
		echo"<a href='visualizar.php'>Ver registros</a>";
	}
	else
	{
	    echo mysqli_error($cnx);/*procura erro na conexão*/
	}

	?>
