<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<header class="cabecalho">
			<div class="logo"> </div>	
			<div class="banner"></div>	
	</header>

	<CENTER>


<form method="get" action="editar2.php">

	<h2>Cadastro dos Pedidos</h2>
	<br>
<p class="pizza">
	<?php
	include ("cnx.php");
	$id=$_GET['id'];

	$selecionar=mysqli_query($cnx,"select * from pizzaria where id='$id'");
while($montar=mysqli_fetch_array($selecionar))
{
	$nome=$montar['nome'];
	$pizza=$montar['sabor'];
	$refresco=$montar['bebida'];
	?>
	<input type="text" name="nome" value="<?php echo $nome; ?>"><br><br>

	    <select name="sabor">
	    	<option value="<?php echo $pizza; ?>" disabled="disabled"><?php echo $pizza; ?></option>
		       <option value="calabresa">Calabresa</option>
	           <option value="4 queijos">4 Queijos</option>
        </select>
        <select name="bebida">
        	<option value="<?php echo $refresco; ?>" disabled="disabled"><?php echo $refresco; ?></option>
        	   <option value="maracuja">Maracujá</option>
        	   <option value="guarana">Guaraná</option>
    	   </select><br><br>
    	</p>
    	<input type="hidden" name="id" value="<?php echo $id; ?>">
    	<p class="botao">
                <input type="submit" value="Alterar Pedido">
            </p>
<?php
}
?>
</form>
</body>
</html>
