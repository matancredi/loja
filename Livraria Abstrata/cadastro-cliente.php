<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexao_db.php"); //conecta ao banco de dados

$erro = "";

if(isset($_POST) && !empty($_POST) ){ //se algum item do formulário não estiver preenchido, exibe erro
    
    if(empty($_POST['nome'])){
        
        $success = false;
        $erro = "Informe o nome";
        
    }
    else if(empty($_POST['data_nasc'])){
        
        $success = false;
        $erro = "Informe a data de nascimento no formato data, ex.: DD/MM/AAAA";
    }
	
	else if(empty($_POST['rg'])){
        
        $success = false;
        $erro = "Informe o RG";
    }
	
	else if(empty($_POST['cpf'])){
        
        $success = false;
        $erro = "Informe o CPF";
    }
	
	else if(empty($_POST['endereco'])){
        
        $success = false;
        $erro = "Informe o endereço";
    }
	
	else if(empty($_POST['telefone'])){
        
        $success = false;
        $erro = "Informe o telefone";
    }
	
	else if(empty($_POST['numero_cartao'])){
        
        $success = false;
        $erro = "Informe o número do cartão";
    }
	
	
    else{
        
        $sqlInsert = "Insert INTO cadastro(nome,data_nasc,rg,cpf,endereco,telefone,numero_cartao)" //insere no banco
            ." VALUES('{$_POST['nome']}'
,'{$_POST['data_nasc']}'
,'{$_POST['rg']}'
,'{$_POST['cpf']}'
,'{$_POST['endereco']}'
,'{$_POST['telefone']}'
,'{$_POST['numero_cartao']}')";
            
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
include ("cabecalho.php"); ?>

<br><br>
<h1>Cadastro de Clientes</h1>
<br>

<form name="cadastro_clientes" id="cadastro_clientes" method="post" class="container" >


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
<input class="form-control" type="text" id="text" name="nome" style="width: 300px;" />
</div>

<div class="form-group">
<label>Data Nascimento:</label>
<input  class="form-control" type="text" id="text" name="data_nasc" style="width: 300px;" />
</div>

<div class="form-group">
<label>Endereço:</label>
<input class="form-control" type="text" id="text" name="endereco" style="width: 300px;" />
</div>

<div class="form-group">
<label>Telefone:</label>
<input class="form-control" type="text" id="text" name="telefone" style="width: 300px;" />
</div>

<div class="form-group">
<label>RG:</label>
<input class="form-control" type="text" id="text" name="rg" style="width: 300px;" />
</div>

<div class="form-group">
<label>CPF:</label>
<input class="form-control" type="text" id="text" name="cpf" style="width: 300px;" /><br>
</div>

<div class="form-group">
<label>Número do cartão:</label>
<input class="form-control" type="text" id="text" name="numero_cartao" style="width: 300px;" /><br>
</div>

<button class="btn btn-primary" type="submit">Cadastrar</button>
</form>
</body>

<?php
include ("rodape.php"); ?>


</html>