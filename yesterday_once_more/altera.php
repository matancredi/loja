<html>
<body>

<?php
include ("cabecalho.php"); //adicionar cabeçalho da página

include("conexao_db.php");
$id=$_GET["produto"]; //recebe o id do produto que foi clicado na outra página
$resultado=mysqli_query($con,"select * from discos"); 

while($produto=mysqli_fetch_assoc($resultado)){
	if($produto['id']==$id){
$titulo=$produto['titulo'];
$artista=$produto['artista'];
$categoria=$produto['categoria'];;
$descricao=$produto['descricao'];
$ano=$produto['ano'];
$preco =$produto['preco'];
$gravadora =$produto['gravadora'];
	}
}

?><br><br><h1> Alterar disco </h1><br><br>

<form name="altera" id="altera" method="post" class="container" > 
<div class="form-group">
<label>Título:</label>
<input class="form-control" value="<?php echo $titulo ?>" type="text" id="text" name="titulo" style="width: 300px;" />
</div>

<div class="form-group">
<label>Artista:</label>
<input class="form-control" value="<?php echo $artista ?>" type="text" id="text" name="artista" style="width: 300px;" />
</div>

<div class="form-group">
<label>Descrição:</label>
<input class="form-control" value="<?php echo $descricao ?>" type="text" id="text" name="descricao" width="auto" height="auto" />
</div>

<div class="form-group">
<label>Ano:</label>
<input class="form-control" value="<?php echo $ano ?>" type="text" id="text" name="ano" style="width: 300px;" />
</div>

<div class="form-group">
<label>Gravadora:</label>
<input class="form-control" value="<?php echo $gravadora ?>" type="text" id="text" name="gravadora" style="width: 300px;" />
</div>

<div class="form-group">
<label>Categoria:</label>
<input class="form-control" value="<?php echo $categoria ?>" type="text" id="text" name="categoria" style="width: 300px;" />
</div>

<div class="form-group">
<label>Preço:</label>
<input class="form-control" value="<?php echo $preco ?>" type="text" id="text" name="preco" style="width: 300px;" />
</div>

<button class="btn btn-primary" onclick="funcao()"type="submit">Alterar</button>



<script>
function funcao(){
alert("Mudanças salvas com sucesso!");}
 </script>

 </form>
 
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexao_db.php");

$erro = "";
if(isset($_POST) && !empty($_POST) ){ //se algum item do formulário não estiver preenchido, exibe erro
        
        $sql = "Update discos set titulo='{$_POST['titulo']}',artista='{$_POST['artista']}',descricao='{$_POST['descricao']}',ano='{$_POST['ano']}',gravadora='{$_POST['gravadora']}',categoria='{$_POST['categoria']}',preco='{$_POST['preco']}' where id=".$id;



			
            if(!$con->query($sql)){
                
                $success = false;
                $erro = mysqli_error($con);
                
            }
            else{
                
                $success = true;
				
                
            }
        
        
    


 $redirect = "produtos.php";
  header("location:$redirect");
 

	
	
}
    
        


?>
	 
	 
	 
	 
<?php
include ("rodape.php");  //adicionar rodapé da página
?>
</html>