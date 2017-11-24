<html>
<?php
include ("cabecalho.php"); //adicionar cabeçalho da página
?>

<body>

<br><br><h1>Detalhes sobre o Produto</h1>

<div id="detalhes" class="container">
<?php
include("conexao_db.php");

$id=$_GET["produto"]; //recebe o id do produto que foi clicado na outra página

$resultado=mysqli_query($con,"select * from livros"); 
while($produto=mysqli_fetch_assoc($resultado)){
	if($produto['id']==$id){
echo "<br><br>"."Título: ".$produto['titulo']."<br>"; //exibir titulo do libro
echo "Autor: ".$produto['autor']."<br>"; //exibir autor do livro
echo "ISBN: ".$produto['ISBN']."<br>"; //exibir isbn do livro
echo "Descrição: ".$produto['descricao']."<br>"; //exibir descricao do livro
echo "Editora: ".$produto['editora']."<br>"; //exibir editora do livro
echo "Preço: ".$produto['preco']."<br>"; //exibir preco do livro
	}
}


echo("<br><br>");

?>

<img src="<?php echo("img/".$id.".jpg"); ?>" height="440" width="280">
	
	<?php echo("<br><br>"); ?>
	
	<a href="<?php echo("remove.php?produto=".$id); ?>">
CLIQUE AQUI PARA DELETAR
</a>



	
	
	</div>
	
	<div>
	
	<?php
	echo("<br><br>");
        include ("rodape.php"); //adicionar rodapé da página
    ?>
    
</div>
	
</body>
</html>
