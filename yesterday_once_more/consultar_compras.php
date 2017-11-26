<html>
<?php
include ("cabecalho.php"); 

include("conexao_db.php");

?>

<br><br><h1>Consulte sua compra</h1>
<form name="consultar" id="consultar" method="post" class="container" >


<div class="form-group">
<label>Digite seu CPF:</label>
<input class="form-control" type="text" id="text" name="cpf" style="width: 300px;" />
</div>


<button class="btn btn-primary" type="submit">Pesquisar</button>

</form>

<?php
echo("<br>Você comprou os seguintes discos: <br>");
if(isset($_POST) && !empty($_POST) ){ //só faz isso se apessoa preencheu o cpf
$cpf=$_POST["cpf"];
$resultado=mysqli_query($con,"select * from compra"); 
while($produto=mysqli_fetch_assoc($resultado)){
if($produto['cpf']==$cpf){
	$r=mysqli_query($con,"select * from discos where id=".$produto['id']);
	$p=mysqli_fetch_assoc($r);
echo($p['titulo']."<br>");
}
}
}

echo("<br><br>");



include ("rodape.php"); ?>
</html>