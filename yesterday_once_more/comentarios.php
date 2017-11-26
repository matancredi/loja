<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexao_db.php"); //conecta ao banco de dados

$erro = "";

if(isset($_POST) && !empty($_POST) ){ //se algum item do formulário não estiver preenchido, exibe erro
    
    if(empty($_POST['comentario'])){
        
        $success = false;
        $erro = "Digite um comentário";
        
    }

	
    else{
        
        $sqlInsert = "Insert INTO comentarios(comentario,autor)" //insere no banco
            ." VALUES('{$_POST['comentario']}','{$_POST['nome']}')";
            
            if(!$con->query($sqlInsert)){ //se não inseriu certo, exibe erro
                
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
include ("cabecalho.php");  //adicionar cabeçalho
?>
<body>
<br><br><h1>Comentários sobre o Site </h1><br><br>
<button class="btn btn-primary"><a href="#adicionar">Adicione um comentário</a></button><br>
<?php
$resultado=mysqli_query($con,"select * from comentarios"); 
while($produto=mysqli_fetch_assoc($resultado)){ //fazer isso para todos os comentários
echo "<br>"."Comentário: ".$produto['comentario']."<br>"; //exibir comentário
echo "Por: ".$produto['autor']."<br>"; //exibir autor do comentário
}
?>


<br><br><h1 id='adicionar'>Adicionar comentário </h1><br><br>

<form name="comentarios" id="comentarios" method="post" class="container" >


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
<label>Comentario:</label>
<input class="form-control" style='width=auto' height='1000px' type="text" id="text" name="comentario" style="width: 300px;" />
</div>

<div class="form-group">
<label>Autor:</label>
<input  class="form-control" type="text" id="text" name="autor" style="width: 300px;" />
</div>


<button class="btn btn-primary"  type="submit">Mandar comentário!</button>
</form>


<?php
include ("rodape.php"); ?>
</body>

</html>