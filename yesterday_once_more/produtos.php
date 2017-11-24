<html>
<?php
include ("cabecalho.php"); //adicionar cabeçalho da página
include("conexao_db.php");
$resultado=mysqli_query($con,"select * from livros"); 

?><br><br><h1>Discos Disponíveis </h1><br><br>

<div  class="container">
<?php

while($produto=mysqli_fetch_assoc($resultado)){ //fazer isso para todos os livros na tabela livros

?><div id="produto"><?php

?>
<img src="<?php echo("img/".$produto['id'].".jpg"); ?>" height="440" width="280">
<?php 

echo "<br><br>"."Título: ".$produto['titulo']."<br>"; //exibir titulo do libro
echo "Autor: ".$produto['autor']."<br>"; //exibir autor do livro
//echo "Preço: R$ ".$produto['preco']."<br><br>"; //exibir preço do livro

?>
<a href="<?php echo("descricao.php?produto=".$produto['id']); ?>">
CLIQUE AQUI PARA SABER MAIS
</a>


</div>


<?php

}
?>
</div>


<?php
//include ("rodape.php");  //adicionar rodapé da página
?>

</html>