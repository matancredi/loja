<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexao_db.php");

$erro = "";

if(isset($_POST) && !empty($_POST) ){
    
    if(empty($_POST['titulo'])){
        
        $success = false;
        $erro = "Informe o titulo";
        
    }

    else{
        
        $sqlInsert = "Delete from livros where"
            ." titulo=('{$_POST['titulo']}'

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
<h1> Remoção de Livros</h1>
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
<label>Digite o título dos livros que deseja remover:</label>
<input class="form-control" type="text" id="text" name="titulo" style="width: 300px;" />
</div>



<button class="btn btn-primary" type="submit">Deletar</button>

</form>


</body>
<?php
include ("rodape.php"); ?>


</html>