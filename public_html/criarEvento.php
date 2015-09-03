<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

session_start(); 
?>
<html>
    <head>
        <title>Friend's Play</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/criarEvento.css"/>
    </head>
    <body>
        
        <?php
        $session = true;
         if ($session): ?> 
        <div id="interface">
            <header id="cabecalho">
                <hgroup>
                    
                    <!--<h1>Friend's Play</h1>-->
                    <!--Adicionando a foto do perfil-->
                     <figure class = "foto-legenda">
                        <img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture">
                        <figcaption>
                            <p>
                                📷 Atualizar foto 
                            </p>
                        </figcaption>
                    </figure>
                    <?php
                          echo "<h1>Olá " . $_SESSION['FULLNAME'] . "</h1>";?>
                          <h2 id="cidade-atual">Cidade atual</h2>
                </hgroup>

                <nav id="menu">
                    <ul>
                        
                        <li><a href="criarEvento.php">Criar Evento</a></li>
                        <li><a href="convites.php">Convites</a></li>
                        <li><a href="eventosCriados.php">Eventos Criados</a></li>
                        <li><a href="partipacaoEventos.php">Participação em Eventos</a></li>
                    </ul>
                </nav>
                <iframe name="janela-calendario" id="calendario-evento" src="https://www.google.com/calendar/embed?src=86c4o9bhc1p9shjob2pcf7sbq4%40group.calendar.google.com&ctz=America/Fortaleza"></iframe>
                <!--<a target="_blank" href="https://www.google.com/calendar/event?action=TEMPLATE&tmeid=a3RvYTJpcWR2bTIxdmRkdTluZGZmY2ozMmcga2Fpb3NiLjE0QG0&tmsrc=kaiosb.14%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_pt-BR.gif"></a>-->
                <!--<iframe src="https://www.google.com/calendar/embed?src=86c4o9bhc1p9shjob2pcf7sbq4%40group.calendar.google.com&ctz=America/Fortaleza" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->
            </header>
            <section id="principal">
                <article id="noticia-pricipal">
                    <header id="cabecalho-artigo">
                        <hgroup>
                            <h1>Menu > Criar Evento</h1>
                        </hgroup>
                     </header>

                    <!---->
                    <form action="_inserts/InserirEvento.php" method="post">
                    
                        <fieldset id="perfil"> <legend>Perfil</legend>
                        
                            <p><label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nNome" placeholder="Nome do evento"></p>
                        
                            <p><label for="modalidade">Modalidade:</label>
                            <input type="text" id="modalidade" name="nModalidade" placeholder="Modalidade do evento"/></p>
                        </fieldset>
                        
                        <fieldset id="endereco"><legend>Endereço do Evento</legend>
                        
                            <p><label for="local">Logradouro:</label>
                            <input type="text" id="local" name="nLocal" placeholder="Rua, Av, Trav..."></p>
                        
                            <p><label for="numeroDoLocal">Número:</label>
                            <input type="number" name="nNumeroDolocal" id="numeroDoLocal" min="0" max="99999"/></p>
                            
                            <p><label for="cidade">Cidade:</label>
                                <input type="text" name="nCidade" id="cidade" size="20" maxlength="30" placeholder="Cidade do evento" list="cidades"/></p>
                            
                            <p><label for="cEstado">Estado:</label>
                                
                                <!--SELECT mostra apenas as escolhas que o usuário pode ver-->
                                <select type="text" name="nEstado" id="cEstado">
                                    
                                    <!--OPTGROUP defini um grupo de opções disponíveis para os
                                    usuários, e OPTION são as opções-->
                                    <optgroup label="Estado">
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RG">RG</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </optgroup>
                                   
                                </select></p>
                            
                        </fieldset>
                        
                        <fieldset id="caracteristica"> <legend>Caracteristicas e data</legend> 
                        
                            <p><label for="data">Data:</label>
                            <input type="date" id="data" name="data">

                            <label for="hora">Hora:</label>
                            <input type="time" id="hora" name="hora"></p>
                        
                            <p><label for="NumMin">Nº mínimo de participantes:</label>
                                <input type="number" name="nNumMin" id="NumMin" min="1" max="99999"/></p>
                            <p><label for="cNumMax">Nº máximo de participantes:</label>
                            <input type="number" name="nNumMax" id="cNumMax" min="1" max="99999"/></p>
                            
                            <fieldset id="privacidadeEvento" name="nPrivacidade"><legend>Privacidade</legend>
                            <input type="radio" name="nPrivacidade" id="publico" checked/> <label for="publico">Publico</label><br/>
                                <input type="radio" name="nPrivacidade" id="privacidade"/> <label for="privado">Privado</label>  
                        </fieldset>
                            </fieldset>
                        
                            
                        
                        
                        <fieldset id="mensagem"><legend>Deixe aqui um aviso para convidados</legend>
                          
                        <label for="descricao">Descrição:</label>
                        <textarea id="descricao" name="descricao" cols="45" rows="5" placeholder="Deixe aqui sua mensagem..."></textarea> <br>
                        
                        </fieldset>
                        
                        
                        <br><button type="submit">Criar evento</button>            
                    </form>
                </article>
                <footer id="rodape">
                <p>
                    Copyright 2015 - by MangSoftware
                    <br>
                    <a href="https://www.facebook.com/kaio.ribeiro.984" target="_blank">Facebook</a>
                </p>
            </footer>
            </section>
        </div>
        <?php else: echo "Fudeu"?>
        <?php endif ?>
    </body>
</html>
