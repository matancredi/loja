<html>
<?php
include ("cabecalho.php"); 

include("conexao_db.php");
$id=$_GET["produto"]; 


?>

Você já tem cadastro na loja?<br>
Digite seu CPF abaixo para verificarmos<br>


<form name="verificaCPF" id="verificaCPF" method="post" class="container" >


<div class="form-group">
<label>Digite seu CPF:</label>
<input class="form-control" type="text" id="text" name="cpf" style="width: 300px;" />
</div>


<button class="btn btn-primary" type="submit">Pesquisar</button>

</form>

<?php
$verifica_CPF=0;
if(isset($_POST) && !empty($_POST) ){ //só faz isso se a pessoa preencheu o cpf
$cpf=$_POST["cpf"];
$resultado=mysqli_query($con,"select * from cadastro"); 
while($produto=mysqli_fetch_assoc($resultado)){
if($produto['cpf']==$cpf){
	echo("cpf encontrado");
$verifica_CPF=1;}
}

if($verifica_CPF=1){
	$inserir=mysqli_query($con,"insert into compra (cpf, id_disco) values (".$cpf",".$id.")"); 
	//coloca produto na tebale compra junto com o cpf
}
else{
	//abre pagina de cadastro mandando id do produto pelo link
	//faz cadastro
	//volta pra pagina do produto
}
}
include ("rodape.php"); ?>
</html>