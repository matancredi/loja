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
	
	   else if(empty($_POST['autor'])){
        
        $success = false;
        $erro = "Informe o autor";
    }
	
    else if(empty($_POST['isbn'])){
        
        $success = false;
        $erro = "Informe o isbn";
    }
	
	 else if(empty($_POST['descricao'])){
        
        $success = false;
        $erro = "Informe a descricao";
    }
	
	 else if(empty($_POST['editora'])){
        
        $success = false;
        $erro = "Informe a editora";
    }
	   else if(empty($_POST['preco'])){
        
        $success = false;
        $erro = "Informe o preco";
    }
    else{
        
        $sqlInsert = "Insert INTO livros(titulo,autor,isbn,descricao,editora,preco)" //comando para inserir as informações obtidas no formaulário no banco de dados
            ." VALUES('{$_POST['titulo']}'
,'{$_POST['autor']}'
,'{$_POST['isbn']}'
,'{$_POST['descricao']}'
,'{$_POST['editora']}'
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
<label>Nome:</label>
<input class="form-control" type="text" id="text" name="titulo" style="width: 300px;" />
</div>

<div class="form-group">
<label>Autor:</label>
<input class="form-control" type="text" id="text" name="autor" style="width: 300px;" />
</div>

<div class="form-group">
<label>Isbn:</label>
<input class="form-control" type="text" id="text" name="isbn" style="width: 300px;" />
</div>

<div class="form-group">
<label>Descrição:</label>
<input class="form-control" type="text" id="text" name="descricao" style="width: 300px;" />
</div>

<div class="form-group">
<label>Editora:</label>
<input class="form-control" type="text" id="text" name="editora" style="width: 300px;" />
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