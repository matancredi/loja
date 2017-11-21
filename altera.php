<html>
<body>
<?php
include ("cabecalho.php"); //adicionar cabeçalho da página

include("conexao_db.php");
$resultado=mysqli_query($con,"select * from livros"); 

?><br><br><h1> Títulos Disponíveis </h1><br><br>
<form method="post" action="#">
<select name="taskOption" >
<?php
while($produto=mysqli_fetch_assoc($resultado)){ //fazer isso para todos os livros na tabela livros
?><option  value="<?php echo $produto['titulo']?>"><?php echo $produto['titulo']?></option>
<?php
}
?>

</select>
 <input type="submit" value="Submit the form"/>

</form>





</body>


<?php
 
   $option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
   if ($option) {
      $titulo=$_POST['taskOption'];
	  $titulo=mysqli_query($con,"select titulo from livros where titulo=('$titulo')");
   } else {
     echo "Selecione um";
     }
	
	
	 	 
?>
<form name="cadastro_produtos" id="cadastro_produtos" method="post" class="container" > 
<div class="form-group">
<label>Nome:</label>
<input class="form-control" value="<?php echo $titulo ?>" type="text" id="text" name="titulo" style="width: 300px;" />
</div>

<div class="form-group">
<label>Autor:</label>
<input class="form-control" type="text" id="text" name="autor" style="width: 300px;" />
</div>

<div class="form-group">
<label>Isbn:</label>
<input class="form-control" type="text" id="text" name="isbn" style="width: 300px;" />
</div>

<div class="form-group">
<label>Preço:</label>
<input class="form-control" type="text" id="text" name="preco" style="width: 300px;" />
</div>

<button class="btn btn-primary" type="submit">Cadastrar</button>

</form>
	 
	 
	 
	 
<?php
include ("rodape.php");  //adicionar rodapé da página
?>
</html>