<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexao_db.php"); //conecta ao banco de dados

$erro = "";

if(isset($_POST) && !empty($_POST) ){
    
    if(empty($_POST['titulo'])){
        
        $success = false;
        $erro = "Informe o titulo";
        
    }
	
	   else if(empty($_POST['artista'])){
        
        $success = false;
        $erro = "Informe o artista";
    }
	
    else if(empty($_POST['descricao'])){
        
        $success = false;
        $erro = "Informe uma descricao";
    }
	
	 else if(empty($_POST['ano'])){
        
        $success = false;
        $erro = "Informe o ano";
    }
	
	 else if(empty($_POST['gravadora'])){
        
        $success = false;
        $erro = "Informe a gravadora";
    }
	
	 else if(empty($_POST['categoria'])){
        
        $success = false;
        $erro = "Informe a categoria";
    }
	
	   else if(empty($_POST['preco'])){
        
        $success = false;
        $erro = "Informe o preco";
    }
    else{
        
        $sqlInsert = "Insert INTO discos(titulo,artista,descricao,ano,gravadora,categoria,preco)" //comando para inserir as informações obtidas no formaulário no banco de dados
            ." VALUES('{$_POST['titulo']}'
,'{$_POST['artista']}'
,'{$_POST['descricao']}'
,'{$_POST['ano']}'
,'{$_POST['gravadora']}'
,'{$_POST['categoria']}'
,'{$_POST['preco']}'
)";
            
            if(!$con->query($sqlInsert)){
                
                $success = false;
                $erro = mysqli_error($con);
                
            }
            else{
                
                $success = true;
                
            }
        
        
    }
      
        
}

?>


<html>
<?php
	include ("cabecalho.php"); ?>

	<br><br>
	<h1>
		Cadastro de Discos
	</h1>
	<br>
	
	<form name="cadastro_produtos" id="cadastro_produtos" method="post" class="container" > 
	

<?php if(isset($success) && !$success){ ?>

<div class="alert alert-danger text-center" role="alert">
  Erro ao salvar dados!<br>
  <?php echo $erro; ?>
</div>



<?php } ?>


<?php if(!empty($success) && $success){ ?>

<div class="alert alert-success text-center" role="alert">
  Dados salvos com sucesso!
</div>

<?php } ?>

<div class="form-group">
<label>Título:</label>
<input class="form-control" type="text" id="text" name="titulo" style="width: 300px;" />
</div>

<div class="form-group">
<label>Artista:</label>
<input class="form-control" type="text" id="text" name="artista" style="width: 300px;" />
</div>

<div class="form-group">
<label>Descrição:</label>
<input class="form-control" type="text" id="text" name="descricao" style="width: 300px;" />
</div>

<div class="form-group">
<label>Ano:</label>
<input class="form-control" type="text" id="text" name="ano" style="width: 300px;" />
</div>

<div class="form-group">
<label>Gravadora:</label>
<input class="form-control" type="text" id="text" name="gravadora" style="width: 300px;" />
</div>

<div class="form-group">
<label>Categoria:</label>
<input class="form-control" type="text" id="text" name="categoria" style="width: 300px;" />
</div>

<div class="form-group">
<label>Preço:</label>
<input class="form-control" type="text" id="text" name="preco" style="width: 300px;" />
</div>

<button class="btn btn-primary" type="submit">Cadastrar</button>

</form>


</body>

<?php
include ("rodape.php"); //adiciona o rodapé
?>


</html>