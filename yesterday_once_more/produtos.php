<html>

<?php
include ("cabecalho.php"); //adicionar cabeçalho da página
include("conexao_db.php");


?><br><br><h1>Discos Disponíveis </h1><br><br>

<div class='container' >
<?php
$resultado=mysqli_query($con,"select * from discos"); 
while($produto=mysqli_fetch_assoc($resultado)){ //fazer isso para todos os discos na tabela discos

?><div id="produto"><?php

?>
<img src="<?php echo("img/".$produto['id'].".jpg"); ?>" height="250" width="250">
<?php 

echo "<br><br>"."Título: ".$produto['titulo']."<br>"; //exibir titulo do disco
echo "Artista: ".$produto['artista']."<br>"; //exibir artista do disco


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