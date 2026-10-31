<?php


/**
 * Função que retorna uma mensagem de erro ou sucesso para validação de campos do formulario
 * @param string $mensagem 
 * @return string $retorna uma mensagem de erro ou sucesso ;
 */
function ExibirMensagem(string $mensagem):bool{
    if(!empty($mensagem) && $_SERVER['REQUEST_METHOD']=='POST'){
        return true;
    }else{
        return false;
    }
}


function VerificaIdade($idade):string{
    if($idade<=18){
        return "Acesso negado , menor de idade";
    }else{
       return "Acesso liberado";
    }
}

/**
 * funcao usada para validação de email valido
 * @param  string $email
 * @return string retorna mensagem de Email valido ou invalido 
 */
function VerificaEmailValido( string $email):string{
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return "Email valido";
    }else{
        return "Email invalido"; 
    }
}
?>