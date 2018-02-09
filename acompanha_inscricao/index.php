<?php include_once ("conexao.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

        <title> Inscrição </title>
        
        <style type='text/css'>
            .carregando{
                color:#ff0000;
                display:none;
            }
            
            table.blueTable {
                width: 100%;
                height: 100%;
                text-align: left;
                border-collapse: collapse;
            }
            table.blueTable td, table.blueTable th {
            }
            table.blueTable tbody td {
                font-size: 13px;
                font-weight: bold;
                color: #333333;
            }
            table.blueTable tr:nth-child(even) {
                background: #EEEEEE;
            }
            table.blueTable tfoot .links {
                text-align: right;
            }
            table.blueTable tfoot .links a{
                display: inline-block;
                background: #1C6EA4;
                color: #FFFFFF;
                padding: 2px 8px;
                border-radius: 5px;


            }
            fieldset { border:1px solid black; }


            .form-style-10{
                width:80%;
                padding:30px;
                margin:40px auto;
                background: #FFF;
                border-radius: 10px;
                -webkit-border-radius:10px;
                -moz-border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
                -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
                -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
            }
            .form-style-10 .inner-wrap{
                padding: 30px;
                background: #F8F8F8;
                border-radius: 6px;
                margin-bottom: 15px;
            }
            .form-style-10 h1{
                background: #2A88AD;
                padding: 20px 30px 15px 30px;
                margin: -30px -30px 30px -30px;
                border-radius: 10px 10px 0 0;
                -webkit-border-radius: 10px 10px 0 0;
                -moz-border-radius: 10px 10px 0 0;
                color: #fff;
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
                font: normal 30px 'Bitter', serif;
                -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
                -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
                box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
                border: 1px solid #257C9E;
            }
            .form-style-10 h1 > span{
                display: block;
                margin-top: 2px;
                font: 13px Arial, Helvetica, sans-serif;
            }
            .form-style-10 label{
                display: block;
                font: 13px Arial, Helvetica, sans-serif;
                color: #888;
                margin-bottom: 15px;
            }
            .form-style-10 input[type="text"],
            .form-style-10 input[type="date"],
            .form-style-10 input[type="datetime"],
            .form-style-10 input[type="email"],
            .form-style-10 input[type="number"],
            .form-style-10 input[type="search"],
            .form-style-10 input[type="time"],
            .form-style-10 input[type="url"],
            .form-style-10 input[type="password"],
            .form-style-10 textarea,
            .form-style-10 select {
                display: block;
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                width: 100%;
                padding: 8px;
                border-radius: 6px;
                -webkit-border-radius:6px;
                -moz-border-radius:6px;
                border: 2px solid #fff;
                box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
                -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
                -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
            }

            .form-style-10 .section{
                color: #2A88AD;
                margin-bottom: 5px;
            }
            .form-style-10 .section span {
                background: #2A88AD;
                padding: 5px 10px 5px 10px;
                position: absolute;
                border-radius: 50%;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border: 4px solid #fff;
                font-size: 14px;
                margin-left: -45px;
                color: #fff;
                margin-top: -3px;
            }
            .form-style-10 input[type="button"], 
            .form-style-10 input[type="submit"]{
                background: #2A88AD;
                padding: 8px 20px 8px 20px;
                border-radius: 5px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                color: #fff;
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
                font: normal 30px 'Bitter', serif;
                -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
                -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
                box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
                border: 1px solid #257C9E;
                font-size: 15px;
            }
            .form-style-10 input[type="button"]:hover, 
            .form-style-10 input[type="submit"]:hover{
                background: #2A6881;
                -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
                -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
                box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
            }
            .form-style-10 .privacy-policy{
                float: right;
                width: 250px;
                font: 12px Arial, Helvetica, sans-serif;
                color: #4D4D4D;
                margin-top: 10px;
                text-align: right;
            }
        </style>
        

    </head>

    <body>
        <h1>Acompanha - Sistema de Acompanhamento de Jovens e Instituições</h1>
        <h2>O RASTREIA indo onde nenhuma DTIC jamais esteve!</h2>

        
        <form name='inscrição_jovem' id ='inscrição_jovem' onsubmit='return validaCampo(); return false;', class='form-style-10'>
            <fieldset>
                <legend>Identificação do Jovem</legend>
                <table cellspacing="10" class="blueTable">
                    <tr>
                        <td><label>Nome Completo:</label></td> <td><input type="text" name="nome" size="40" maxlength="150" required="nome"/></td>
                    </tr>
                    
                    <tr>
                        <td><label>O Nome informado é o nome social?</label></td>
                        <td>
                            <input type="radio" id="Sim" name="nomesocial" value="T" required="nomesocial"/> <label for="Sim">Sim</label>
                            <input type="radio" id="Não" name="nomesocial" value="F" required="nomesocial"/> <label for="Não">Não</label>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Sexo:</label></td>
                        <td>
                            <input type="radio" id="sexoM" name="sexo" value="M" /> <label for="sexoM">Masculino</label>
                            <input type="radio" id="sexoF" name="sexo" value="F" /> <label for="sexoF">Feminino</label>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Raça/Cor:</label></td>
                        <td>
                            <select name="raca" id="raca">
                                <option value="Nao Declarado">Não declarado</option>
                                <option value="Branco">Branco</option>
                                <option value="Preto">Preto</option>
                                <option value="Pardo">Pardo</option>
                                <option value="Amarelo">Amarelo</option>
                                <option value="Indigena">Indígena</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Data de Nascimento:</label></td> <td><input type="text" name="nascimento" size="20" maxlength="8" /></td>
                    </tr>
                    
                    <tr>
                        <td><label>CPF:</label></td> <td><input type="text" name="cpf" size="40" maxlength="11" /></td>
                    </tr>
                    
                    <tr>
                        <td><label>RG:</label></td> <td><input type="text" name="RG" size="40" maxlength="8" /></td>
                    </tr>
                    
                    <tr>
                        <td><label>CPF da Mãe:</label></td> <td><input type="text" name="cpf" size="40" maxlength="11" /></td>
                    </tr>
                    
                    <tr>
                        <td><label>Data de Inscrição:</label></td> <td><input type="text" name="nascimento" size="20" maxlength="8" /></td>
                    </tr>
                </table>
            </fieldset>
            
            <br><br>
            
            <fieldset>
                <legend>Dados de Endereço</legend>
                    <table cellspacing="10" class="blueTable">
                    <tr>
                        <td><label>E-mail:</label></td> <td><input type="text" name="email" size="40" maxlength="40" /></td>
                    </tr>
                    
                    <tr>
                        <td><label>Telefone de contato:</label></td> <td><input type="text" name="telefone" size="40" maxlength="12" /></td>
                    </tr>
                    
                    <tr>
                        <td><label>Munícipio de residência:</label></td>
                        <td><select name = "id_municipio" id="id_municipio">
                            <option value=" ">Escolha o Municipio</option>
                            <?php 
                                $result_cat_post = "SELECT DISTINCT `municipio` FROM `acoes`";
                                $resultado_cat_post = mysqli_query ($connect, $result_cat_post);
                                while($row_cat_post = mysqli_fetch_array($resultado_cat_post)){
                                    echo '<option value="'. $row_cat_post[0].'">'.$row_cat_post[0].'</option>';
                                }
                            ?>
                        </select></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label>Região de residência:</label>
                        </td>
                        
                        <td>
                            <span class ="carregando"> Aguarde, carregando...</span>
                            <select id = "id_regiao" name = "id_regiao">
                                <option value="">Escolha uma região</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Bairro de residência:</label></td>
                        <td>
                            <select id = "id_bairro" name = "id_bairro">
                                <option value="">Escolha um Bairro</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>
            
            <br><br>
            
            <fieldset>
                <legend>Perfil do Jovem</legend>
                <table cellspacing="10" class="blueTable">
                    <tr>
                        <td><label>Tem Filhos(as) e/ou dependentes?</label></td>
                        <td>
                            <input type="radio" id="tem_filhoS" name="tem_filho" value="Sim" /> <label for="tem_filhoS">Sim</label>
                            <input type="radio" id="tem_filhoN" name="tem_filho" value="Não" /> <label for="tem_filhoN">Não</label><br>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Tem alguma deficiência? Qual(is)?</label></td>
                        <td>
                            <input type="checkbox" name="deficiencia" value="cegueira">Cegueira</input>
                            <input type="checkbox" name="deficiencia" value="visao">Visão</input>
                            <input type="checkbox" name="deficiencia" value="surdez severa">Surdez Severa</input><br>
                            <input type="checkbox" name="deficiencia" value="surdez leve">Surdez Leve</input>
                            <input type="checkbox" name="deficiencia" value="fisica">Física</input>
                            <input type="checkbox" name="deficiencia" value="mental">Mental</input><br>
                            <input type="checkbox" name="deficiencia" value="down">Down</input>
                            <input type="checkbox" name="deficiencia" value="outro" id="option_outro">Outro</input> <input type="text" name="deficiencia" size="25" maxlength="40" for="option_outro " />
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Necessita de apoio de terceiros?</label></td>
                        <td>
                            <input type="radio" name="apoio_deficiencia" value="sim" /> <label for="sim">Sim</label>
                            <input type="radio" name="apoio_deficiencia" value="nao" /> <label for="nao">Não</label><br>
                            <label>Se sim, em qual situação? </label><input type="text" name="deficiencia" size="25" maxlength="40" /></td>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Escolaridade:</label></td>
                        <td>
                            <select name="escolaridade">
                                <option value="sem escolaridade">Sem escolaridade (nunca frequentou a escola);</option>
                                <option value="ensino fundamental incompleto">Ensino fundamental incompleto</option>
                                <option value="ensino medio incompleto">Ensino médio incompleto</option>
                                <option value="ensino medio">Ensino médio</option>
                                <option value="ensino superior incompleto">Ensino superior incompleto</option>
                                <option value="ensino superior completo">Ensino superior completo</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Sabe ler/escrever?</label></td>
                        <td>
                            <input type="radio" name="ler_escrever" value="sim" /> <label for="sim">Sim</label>
                            <input type="radio" name="ler_escrever" value="nao" /> <label for="nao">Não</label>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Estuda atualmente?</label></td>
                        <td>
                                <input type="radio" name="estuda_atualmente" value="sim" /> <label for="sim">Sim</label>
                                <input type="radio" name="estuda_atualmente" value="nao" /> <label for="nao">Não</label>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>É encaminhado de alguma instituição?</label></td>
                        <td>
                                <input type="radio" name="encaminhado_instituicao" value="sim" /> <label for="sim">Sim</label>
                                <input type="radio" name="encaminhado_instituicao" value="nao" /> <label for="nao">Não</label>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Qual instituição?</label></td>
                        <td>
                            <select id = "id_instituicao" name = "id_instituicao">
                                <option value="">Escolha a instituição</option> 
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label> Qual a situação de vulnerabilidade?</label></td> <td><input type="text" name="nome" size="40" maxlength="150" /></td>
                    </tr>
                </table>
            </fieldset>
            
            <br><br>
                    
            <fieldset>
                <legend>Cadastro nas Ações</legend>
                <table cellspacing="10" class="blueTable">  
                    <tr>
                        <td><label>Primeira Opção de Curso</label></td>
                        <td>
                            <select id = "primeira_opcao" name = "primeira_opcao">
                                <option value="">Escolha o curso</option> 
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Segunda Opção de Curso</label></td>
                        <td>
                            <select id = "segunda_opcao" name = "segunda_opcao">
                                <option value="">Escolha o curso</option> 
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit">
        </form>   
             
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("jquery", "1.4.2");
        </script>
        
        <script type="text/javascript">
            $(function(){
                $('#id_municipio').change(function(){
                    if ($(this).val()){
                        $('#id_regiao').hide();
                        $('.carregando').show();
                        $.getJSON('regioes_post.php?search=',{id_municipio: $(this).val(), ajax:'true'}, function(j){
                            var options = '<option value"">Escolha a Região</option>';
                            for (var i = 0; i < j.length; i++){ 
                                options += '<option value = "' + j[i].value + '">' + j[i].regiao + '</option>';
                            }
                            $('#id_regiao').html(options).show();
                            $('.carregando').hide();
                            });
                    } else {
                        $('#id_regiao').html('<option value"">Escolha a Região</option>');
                    }
                });
            });
        </script>
        

    </body>
</html>
