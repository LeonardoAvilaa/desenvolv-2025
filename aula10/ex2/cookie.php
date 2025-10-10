<?php

setcookie("usuario","nome_user", time() +(86400 * 30),"/");
?> 
<html>
    <body>
        <h1>Testando Cookies</h1>
        <?php
            if(isset($_COOKIE["usuario"])){
                echo "O cookie 'usuario' não foi definido!";
            } else {
                echo "Cookie 'usuario' está definido!<br>";
                echo "Valor: " . $_COOKIE["usuario"];
            }
        ?>
    </body>
</html>