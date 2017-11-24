<html>
<?php
include ("cabecalho.php"); 

include("conexao_db.php");
$resultado=mysqli_query($con,"select * from livros"); 

?>
<script>var x=0;</script>
<br><br>
<h1>Selecione os produtos que deseja comprar</h1>
<br>
<form class="container" action="cadastro-cliente.php" method="post">
<?php while($produto=mysqli_fetch_assoc($resultado)){?>

            <p>
                <input type="checkbox" name="produto" value="on"><?php echo $produto['titulo'];?>
            </p>
           

<?php } ?>


<button  class="btn btn-primary" onclick="funcao()">Clique aqui para comprar</button>
<script>
function funcao(){
alert("Para comprar é necessário realizar o cadastro");
x=1;}
</script>
<br>
</form>





<?php
include ("rodape.php"); ?>
</html>