<html>
<?php
include ("cabecalho.php"); //adicionar cabeçalho da página

include("conexao_db.php");
$resultado=mysqli_query($con,"select * from livros"); 

?><br><br><h1> Títulos Disponíveis </h1><br><br><div class="container"><?php

while($produto=mysqli_fetch_assoc($resultado)){ //fazer isso para todos os livros na tabela livros
echo "Título: ".$produto['titulo']."<br>"; //exibir titulo do libro
echo "Autor: ".$produto['Autor']."<br>"; //exibir autor do livro
echo "Preço: R$ ".$produto['preco']."<br><br>"; //exibir preço do livro
}
?>
</div>
<?php
include ("rodape.php");  //adicionar rodapé da página
?>
</html>