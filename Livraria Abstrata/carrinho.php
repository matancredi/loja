<html>
<?php
include ("cabecalho.php"); 

include("conexao_db.php");
$resultado=mysqli_query($con,"select * from livros"); 

?>
<br><br>
<h1>Selecione os produtos que deseja comprar</h1>
<br>
<?php while($produto=mysqli_fetch_assoc($resultado)){?>
<form class="container" action="index.php" method="post">
            <p>
                <input type="checkbox" name="produto" value="on"><?php echo $produto['titulo'];?>
            </p>
           

<?php } ?>


<button  class="btn btn-primary" onclick="funcao()">Clique aqui para comprar</button>
<script>
function funcao(){
alert("Compra efetuada!");}
</script>
<br>
</form>





<?php
include ("rodape.php"); ?>
</html>