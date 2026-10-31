<?php

require_once "function.php";

$mensagemErro = "";
$mensagemSucesso = "";
$opcaoSexo = ['MASCULINO','FIMININO','OUTRO'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['nome']) && !empty($_POST['idade']) && $_POST['email']){
        $nome = htmlspecialchars($_POST['nome']);
        $idade = htmlspecialchars($_POST['idade']);
        $email = htmlspecialchars($_POST['email']);
        $sexo =htmlspecialchars($_POST['sexo']) ;
        
        var_dump($sexo);

        $idade = trim($idade);
        $nome = trim($nome);
        $email = trim($email);

        $verificaIdade = VerificaIdade($idade);
        $validaEmail = VerificaEmailValido($email);
        
        if(empty($nome)){
            $mensagemErro = "Preencha o campo nome";
        }elseif(!in_array($sexo,$opcaoSexo )){
            $mensagemErro = "Opcao invalida ".$sexo;
        }elseif($validaEmail!=="Email valido"){
            $mensagemErro = $validaEmail;
        }elseif($verificaIdade!=="Acesso negado"){
            $mensagemErro = $verificaIdade;
        }
    }else{
        $mensagemErro = "Formulario nao enviado ou a campos em branco";
    }
}


?>