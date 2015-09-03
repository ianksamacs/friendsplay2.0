<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Friend's Play</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/criarEvento.css"/>
 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->

<?php header("Location: criarEvento.php"); ?>


    <?php else: ?>     <!-- Before login --> 
<div class="container">
<img id="img-logo" src="_imagens/tela-principal.png"/>
                <nav id="figuras">
                    <ul>
                        <li id="login-fig"><a href="fbconfig.php" ><img src="_imagens/login.png"/></a></li><br/>
                        <li id="login-nome"><a href="http://www.facebook.com/" target="_blank">Ainda não é cadastrado?</a></li>
                    </ul>
                </nav>
    <?php endif ?>
  </body>
</html>