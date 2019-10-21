<?php
    
    // importar o arquivo para abrir conexao com o banco de dados
    require_once('../bd/conexao.php');
    
    // funcao para abrir a conexao com o banco
    $conexao = conexaoMysql();
//    var_dump($conexao);
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style_cms.css">
        <title>CMS - Gerenciamento</title>
    </head>
    <body>
        
        <!--  Estrutura para segurar o conteudo centralizado    -->
        <div class="container_cms" class="center">
            
            <?php
                require_once('cabecalho.php');
                require_once('menu.php');
            ?>
            
            <!-- Conteudo com os links para editar as paginas do site -->
            <section id="adm_fale_conosco">
                
                
                <br>
                <table id="tbl_fale_conosco">
                    <tr>
                        <td>Nome</td>
                        <td>Celular</td>
                        <td>Email</td>
                        <td>Opcao Mensagem</td>
                        <td>Opcoes</td>
                    </tr>
                    
                    <?php
                        
                        // script do banco de dados
                        $sql = "select * from tbl_contato";
                        $select = mysqli_query($conexao, $sql);
                        
                        while($rsContatos = mysqli_fetch_array($select)){
                            
                    ?>
                    
                    <tr>
                        <td><?=$rsContatos['nome']?></td>
                        <td><?=$rsContatos['celular']?></td>
                        <td><?=$rsContatos['email']?></td>
                        <td><?=$rsContatos['opcaomensagem']?></td>
                        <td> 1 | 2 | 3</td>
                    </tr>
                    
                    <?php
                        
                        }
                        
                    ?>
                    
                </table>
               
                
            </section>
            
            <?php
                require_once('rodape.php');
            ?>
            
        </div>
    </body>
</html>