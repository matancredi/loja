<?php

$id=$_GET["produto"]; 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexao_db.php");

$erro = "";

        
        $sql = "Delete from livros where id=".$id;



			
            if(!$con->query($sql)){
                
                $success = false;
                $erro = mysqli_error($con);
                
            }
            else{
                
                $success = true;
                
            }
        
        
    
    
    
        


?>




<html>
<?php
include ("cabecalho.php"); ?>
<br><br>
<h1> Remoção de Livros</h1>
<br>


<?php 




if(isset($success) && !$success){ ?>

<div class="alert alert-danger text-center" role="alert">
  Não foi possível deletar, tente novamente<br>
  <?php echo $erro; ?>
</div>



<?php } ?>


<?php if(!empty($success) && $success){ ?>

<div class="alert alert-success text-center" role="alert">
  Livro deletado com sucesso!
</div>

<?php } ?>




</body>
<?php
include ("rodape.php"); ?>


</html>