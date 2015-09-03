<?php 
include ("_Funcoes/FuncaoSelect.php");

$consulta= select("Evento","*", null, null, null);

 ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Friend's Play</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <hgroup>
                    <h1>Friend's Play</h1>
                </hgroup>

                <nav id="menu">
                    <ul>
                        
                        <li><a href="criarEvento.php">Criar Evento</a></li>
                        <li><a href="convites.php">Convites</a></li>
                        <li><a href="eventosCriados.php">Eventos Criados</a></li>
                        <li><a href="partipacaoEventos.php">Participação em Eventos</a></li>
                    </ul>
                </nav>
                <iframe name="janela-calendario" id="calendario" src="https://www.google.com/calendar/embed?src=86c4o9bhc1p9shjob2pcf7sbq4%40group.calendar.google.com&ctz=America/Fortaleza"></iframe>
            </header>
            <section id="principal">
            
                    <h1>Eventos Criados</h1>
                    
                    <div class="tabela">
                        <div class="linha">
                            <div class="coluna">Nome</div>
                            <div class="coluna">Local</div>
                            <div class="coluna">Data</div>
                            <div class="coluna">Hora</div>
                            <div class="coluna">N° Participantes</div>
                            <div class="coluna">Privacidade</div>
                        </div>
                        <!-- "nome_evento, local_evento, data_evento, horario_evento, contador_participantes_evento, privacidade_evento" -->
                        <?php 
                            if($consulta == true){
                                for ($i=0; $i < count($consulta); $i++) { 
                                    
                         ?>
                        <div class="linha">
                            <div class="coluna"><?php echo $consulta[$i]['nome_evento'] ?></div>
                            <div class="coluna"><?php echo $consulta[$i]['local_evento'] ?></div>
                            <div class="coluna"><?php echo $consulta[$i]['data_evento'] ?></div>
                            <div class="coluna"><?php echo $consulta[$i]['horario_evento'] ?></div>
                            <div class="coluna"><?php echo $consulta[$i]['contador_participantes_evento'] ?></div>
                            <div class="coluna"><?php echo $consulta[$i]['privacidade_evento'] ?></div>
                        </div>
                        <?php 
                                }
                            }else{
                                echo "Nunhum dado encontrado!";
                            }
                         ?>

                    </div>                        

            </section>
        </div>
    </body>
</html>
