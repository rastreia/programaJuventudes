<?php include_once ("conexao.php"); ?>

<style>
    <?php include 'CSS/formulario.css'; ?>
</style>

<!DOCTYPE html>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <title> Inscrição </title>
        
            <script type="text/javascript">
                function fMasc(objeto,mascara) {
                        obj=objeto
                        masc=mascara
                        setTimeout("fMascEx()",1)
                }
                function fMascEx() {
                        obj.value=masc(obj.value)
                }
                function mTel(tel) {
                        tel=tel.replace(/\D/g,"")
                        tel=tel.replace(/^(\d)/,"($1")
                        tel=tel.replace(/(.{3})(\d)/,"$1)$2")
                        if(tel.length == 9) {
                                tel=tel.replace(/(.{1})$/,"-$1")
                        } else if (tel.length == 10) {
                                tel=tel.replace(/(.{2})$/,"-$1")
                        } else if (tel.length == 11) {
                                tel=tel.replace(/(.{3})$/,"-$1")
                        } else if (tel.length == 12) {
                                tel=tel.replace(/(.{4})$/,"-$1")
                        } else if (tel.length > 12) {
                                tel=tel.replace(/(.{4})$/,"-$1")
                        }
                        return tel;
                }
                function mCNPJ(cnpj){
                        cnpj=cnpj.replace(/\D/g,"")
                        cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
                        cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
                        cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
                        cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
                        return cnpj
                }
                function mCPF(cpf){
                        cpf=cpf.replace(/\D/g,"")
                        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
                        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
                        cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
                        return cpf
                }
                function mCEP(cep){
                        cep=cep.replace(/\D/g,"")
                        cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
                        cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
                        return cep
                }
                function mNum(num){
                        num=num.replace(/\D/g,"")
                        return num
                }
        </script>
        
        <script language="JavaScript" >
            function validaCampo(){

            if(document.cadastro.cpf.value=="" && document.cadastro.rg.value==""){
                alert("É Obrigatório o preenchimento do campo CPF ou RG");
                return false;
            }
            else
            return true;
            }
        </script>
    </head>

    <body>
        <div class="cab">
            <h1 align="center">Acompanha - Sistema de <font color="#ffff00">A</font>comp<font color="#ffff00">a</font>nh<font color="#ffff00">a</font>mento de Jovens e Instituições</h1>
            <h2 align="center" background="ffff00">O R<font color="#ffff00">A</font>STREI<font color="#ffff00">A</font> indo onde nenhuma DTICtac jamais esteve!</h2>
        </div>

        <br>
        <br>

        
        <form name="cadastro" onSubmit="return validaCampo(); return false;">
            <div class="tabs-container">
                <input type="radio" name="tabs" class="tabs" id="tab1" checked>
                <label for="tab1">1 - Identificação do Jovem</label>
                <div>
                    <fieldset>
                        <br>
                        <fieldset class="grupo">
                            <div class="campo">
                                <label>1. Nome Completo:</label>
                                <input type="text" name="nome" maxlength="150" required="nome" style="width: 20em">
                            </div>

                            <div class="campo">
                                <label>2. O Nome informado é o nome social?</label>
                                <label class="checkbox" for="Sim">
                                    <input type="radio" id="Sim" name="nomesocial" value="T" required="nomesocial"> Sim
                                </label>
                                <label class="checkbox" for="Não">
                                    <input type="radio" id="Não" name="nomesocial" value="F" required="nomesocial"> Não
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="grupo">
                            <div class="campo">
                                <label>3. Raça/Cor:</label>
                                <select name="raca" id="raca">
                                    <option value="Nao Declarado">Não declarado</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Preto">Preto</option>
                                    <option value="Pardo">Pardo</option>
                                    <option value="Amarelo">Amarelo</option>
                                    <option value="Indigena">Indígena</option>
                                </select>
                            </div>

                            <div class="campo">
                                <label>4. Data de Nascimento:</label><input type="date" name="nascimento" min="1998-05-11" max="2005-05-20">                    
                            </div>                   
                        </fieldset>

                        <fieldset class="grupo">

                            <div class="campo">
                                <label>5. CPF:</label><input type="text" name="cpf" id="cpf" size="40" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );">                   
                            </div>

                            <div class="campo">
                                <label>6. RG:</label><input type="text" name="rg" id="rg" size="40" maxlength="8">  
                            </div>
                            
                            <div class="campo">
                                <label>*O preenchimento do CPF ou RG é obrigatório</label>
                            </div>

                        </fieldset>

                        <fieldset class="grupo">

                            <div class="campo">
                                <label>7. CPF da Mãe:</label><input type="text" name="cpfmae" size="40" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );">                    
                            </div>

                            <div class="campo">
                                <label>8 .Data de Inscrição:</label><input type="date" name="nascimento" min="2018-01-01" max="2018-12-31">                   
                            </div> 

                        </fieldset>
                    </fieldset>   
                </div>

                <input type="radio" name="tabs" class="tabs" id="tab2">
                <label for="tab2">2 - Endereço e Contato</label>
                
                <div>
                    <br>
                    <fieldset>
                        <div class="campo">
                            <label>1. E-mail:</label><input type="text" name="email" size="40" maxlength="40" />
                        </div>

                        <div class="campo">
                            <label>2. Telefone de contato:</label><input type="text" name="telefone" size="40" maxlength="14" onkeydown="javascript: fMasc( this, mTel );" />   
                        </div>

                        <div class="campo">
                            <label>3. Munícipio de residência:</label>
                            <select name = "id_municipio" id="id_municipio">
                                <option value=" ">Escolha o Municipio</option>
                                <?php 
                                    $result_cat_post = "SELECT DISTINCT `municipio` FROM `acoes`";
                                    $resultado_cat_post = mysqli_query ($connect, $result_cat_post);
                                    while($row_cat_post = mysqli_fetch_array($resultado_cat_post)){
                                        echo '<option value="'. $row_cat_post[0].'">'.$row_cat_post[0].'</option>';
                                    }
                                ?>
                            </select>  
                        </div>

                        <fieldset>
                            <div class="campo">
                                <label>4. Região de residência:</label>
                                <span class ="carregando"> Aguarde, carregando...</span>
                                <select id = "id_regiao" name = "id_regiao">
                                    <option value="">Escolha uma região</option>
                                </select>
                            </div>

                            <div class="campo">
                                <label>5. Bairro de residência:</label>
                                <select id = "id_bairro" name = "id_bairro">
                                    <option value="">Escolha um Bairro</option>
                                </select>
                            </div>
                        </fieldset>

                    </fieldset>                
                </div>

                <input type="radio" name="tabs" class="tabs" id="tab3">
                <label for="tab3">3 - Perfil do Jovem</label>
                <div>
                    <br>
                    <fieldset>
                        <div class="campo">
                            <label>1. Tem Filhos(as) e/ou dependentes?</label>
                            <label class="checkbox">
                                <input type="radio" id="tem_filhoS" name="tem_filho" value="Sim" /> Sim
                            </label>                  
                            <label class="checkbox">
                                <input type="radio" id="tem_filhoN" name="tem_filho" value="Não" /> Não
                            </label>
                        </div>

                        <div>
                            <fieldset class="grupo">
                                <label>2. Tem alguma deficiência? Qual(is)?</label>
                                <div>
                                    <input type="checkbox" name="deficiencia" value="cegueira" id="idcegueira">
                                    <label for="idcegueira">Cegueira</label><br>
                                    <input type="checkbox" name="deficiencia" value="visao" id="idvisao">
                                    <label for="idvisao">Visão</label><br>
                                    <input type="checkbox" name="deficiencia" value="surdez severa" id="idsurdez_severa">
                                    <label for="idsurdez_severa">Surdez Severa</label><br>
                                    <input type="checkbox" name="deficiencia" value="surdez leve" id="idsurdez_leve">
                                    <label for="idsurdez_leve">Surdez Leve</label><br>
                                    <input type="checkbox" name="deficiencia" value="fisica" id="idfisica">
                                    <label for="idfisica">Física</label><br>
                                    <input type="checkbox" name="deficiencia" value="mental" id="idmental">
                                    <label for="idmental">Mental</label><br>
                                    <input type="checkbox" name="deficiencia" value="down" id="iddown">
                                    <label for="iddown">Down</label><br>
                                    <input type="checkbox" name="deficiencia" value="outro" id="option_outro">
                                    <label for="option_outro">Outro</label>
                                    <input type="text" name="deficiencia" size="25" maxlength="40" for="option_outro " />   
                                </div>
                            </fieldset>
                        </div>
                        <br>
                        <div class="campo">
                            <fieldset class="grupo">

                                <div class="campo">
                                    <label>3. Necessita de apoio de terceiros?</label>
                                    <input type="radio" name="apoio_deficiencia" value="sim" /> <label class="checkbox" for="sim">Sim</label>
                                    <input type="radio" name="apoio_deficiencia" value="nao" /> <label class="checkbox" for="nao">Não</label>
                                </div>

                                <div>
                                    <label>Se sim, em qual situação? </label><input type="text" name="deficiencia" size="25" maxlength="40" />
                                </div>
                            </fieldset>
                        </div>

                        <div class="campo">
                            <fieldset class="grupo">
                                <div class="campo">
                                    <label>4. Escolaridade:</label>
                                    <select name="escolaridade">
                                        <option value="sem escolaridade">Sem escolaridade (nunca frequentou a escola)</option>
                                        <option value="ensino fundamental incompleto">Ensino fundamental incompleto</option>
                                        <option value="ensino medio incompleto">Ensino médio incompleto</option>
                                        <option value="ensino medio">Ensino médio</option>
                                        <option value="ensino superior incompleto">Ensino superior incompleto</option>
                                        <option value="ensino superior completo">Ensino superior completo</option>
                                    </select>
                                </div>

                                <div class="campo">
                                    <label>5. Sabe ler/escrever?</label>
                                    <input type="radio" name="ler_escrever" value="sim" /> <label class="checkbox" for="sim">Sim</label>
                                    <input type="radio" name="ler_escrever" value="nao" /> <label class="checkbox" for="nao">Não</label>   
                                </div>

                                <div class="campo">
                                    <label>6. Estuda atualmente?</label>
                                    <input type="radio" name="estuda_atualmente" value="sim" /> <label class="checkbox" for="sim">Sim</label>
                                    <input type="radio" name="estuda_atualmente" value="nao" /> <label class="checkbox" for="nao">Não</label>
                                </div>

                            </fieldset>
                        </div>

                        <div class="campo">
                            <fieldset class="grupo">
                                <div class="campo">
                                    <label>7. É encaminhado de alguma instituição?</label>
                                    <input type="radio" name="encaminhado_instituicao" value="sim" /> <label class="checkbox" for="sim">Sim</label>
                                    <input type="radio" name="encaminhado_instituicao" value="nao" /> <label class="checkbox" for="nao">Não</label>   
                                </div>

                                <div class="campo">
                                    <label>8. Qual instituição?</label>
                                    <select id = "id_instituicao" name = "id_instituicao">
                                        <option value="">Escolha a instituição</option> 
                                    </select>
                                </div>

                                <div class="campo">
                                    <label>10. Qual a situação de vulnerabilidade?</label>
                                    <input type="text" name="nome" size="40" maxlength="150"/>
                                </div>   
                            </fieldset>  
                        </div>        
                    </fieldset>   
                </div>

                <input type="radio" name="tabs" class="tabs" id="tab4">
                <label for="tab4">4 - Cadastro nas Ações</label>
                <div>   
                    <br>
                    <div class="campo">
                        <label>1. Primeira Opção de Curso</label>
                        <select id = "primeira_opcao" name = "primeira_opcao">
                            <option value="">Escolha o curso</option> 
                        </select>
                    </div>
                    
                    <div class="campo">
                        <label>2. Segunda Opção de Curso</label>
                        <select id = "segunda_opcao" name = "segunda_opcao">
                            <option value="">Escolha o curso</option> 
                        </select>                           
                    </div>
                    <br>
                    <input type="submit" name="Submit">
                    
                </div>             
            </div>
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
