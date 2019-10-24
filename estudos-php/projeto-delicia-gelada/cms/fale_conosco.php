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
        <script src="js/jquery.js"></script>
        <script>
            
            $(document).ready(function(){

                // Funcition para abrir a modal
                $('.visualizar').click(function(){
                    $('#container_modal').fadeIn(1000);
                });
                
                $('#fechar').click(function(){
                    $('#container_modal').fadeOut(1000);
                });
            
            });
            
            function visualizarDados(idItem){
                $.ajax({
                    type: "POST",
                    url: "modal_fale_conosco.php",
                    data: {modo:'visualizar', codigo:idItem},
                    success: function(dados){
                        $('#modal_dados').html(dados);
                    }
                });
            }
        </script>
        <link rel="stylesheet" type="text/css" href="css/style_cms.css">
        <title>CMS - Gerenciamento</title>
    </head>
    <body>
        <div id="container_modal">
            <div id="modal">
                
                <div id="fechar">
                    X
                </div>
                
                <div id="modal_dados"></div>
            </div>  
        </div>     
        <!--  Estrutura para segurar o conteudo centralizado    -->
        <div class="container_cms" class="center">
            
            <?php
                require_once('cabecalho.php');
                require_once('menu.php');
            ?>
            
            <!-- Conteudo com os links para editar as paginas do site -->
            <section id="adm_fale_conosco">
                <div id="container_filtro">
                    
                    <h1>Filtro: 
                        <select>
                            <option>Susgestao</option>
                            <option>Critica</option>
                        </select>
                        <input type="button" value="Ok" name="btn_buscar">
                    </h1>
                </div>
                
                <br>
                <table id="tbl_fale_conosco">
                    <tr class="bkg-primary">
                        <td class="td_principal td_nome txt-center">Nome</td>
                        <td class="td_principal td_celular txt-center">Celular</td>
                        <td class="td_principal td_email txt-center">Email</td>
                        <td class="td_principal td_opcao txt-center">Opção Mensagem</td>
                        <td class="td_principal td_visualizar txt-center">Visualizar</td>
                        <td class="td_principal td_excluir txt-center">Excluir</td>
                    </tr>
                    
                    <?php
                        
                        // script do banco de dados
                        $sql = "select * from tbl_faleconosco";
                        $select = mysqli_query($conexao, $sql);
                        
                        while($rsContatos = mysqli_fetch_array($select)){
                            
                    ?>
                    
                    <tr>
                        <td class="td_nome"><?=$rsContatos['nome']?></td>
                        <td class="td_celular"><?=$rsContatos['celular']?></td>
                        <td class="td_email"><?=$rsContatos['email']?></td>
                        <td class="td_opcao"><?=$rsContatos['opcaomensagem']?></td>
                        <td class="td_visualizar">
                            <div class="tbl_icone center">
                                <figure>
                                    <a 
                                       href="#"
                                       class="visualizar"
                                       onclick="visualizarDados(<?=$rsContatos['codigo']?>);">
                                        <img src="icones/lupa.png" class="bkg-img">
                                    </a>
                                </figure>
                            </div>
                        </td>
                        <td class="td_excluir">
                            <div class="tbl_icone center">
                                <figure>
                                    <a 
                                       onclick="return confirm('Deseja realmente excluir esse registro?')" 
                                       href="../bd/delete.php?modo=excluir&codigo=<?=$rsContatos['codigo']?>">
                                        <img src="icones/delete.png" class="bkg-img">
                                    </a>
                                </figure>
                            </div>
                        </td>
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