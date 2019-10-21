<?php 
    if(isset($_POST['modo'])){
        
        if(strtoupper($_POST['modo']) == 'VISUALIZAR'){
            
            $codigo = $_POST['codigo'];
            
            require_once('../bd/conexao.php');
            
            $conexao = conexaoMysql();
            
            $sql = "select * from tbl_contato
                    where codigo=".$codigo;
            
            $select = mysqli_query($conexao, $sql);
            
            // verificar se existe dados e converte em array
            if($rsVisualizar = mysqli_fetch_array($select)){
                
                // Guardando os dados do select em variaveis
                $nome = $rsVisualizar['nome'];
                $telefone = $rsVisualizar['telefone'];
                $celular = $rsVisualizar['celular'];
                $email = $rsVisualizar['email'];
                $homePage = $rsVisualizar['homepage'];
                $linkFacebook = $rsVisualizar['linkfacebook'];
                $profissao = $rsVisualizar['profissao'];
                $sexo = $rsVisualizar['sexo'];
                $opcao = $rsVisualizar['opcaomensagem'];
                $mensagem = $rsVisualizar['mensagem'];
                echo($mensagem);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Home
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        
    </body>
</html>