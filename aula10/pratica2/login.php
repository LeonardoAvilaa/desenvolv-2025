<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["senha"] = $_POST['senha'];
    $_SESSION["inicio_sessao"] = date ("d/m/Y H:i:s");

    echo "Usuário logado com sucesso";
    setcookie("usuariocookie",$_SESSION["usuario"],(time()+60*5) , "/");
    setcookie("senhacookie",$_SESSION["senha"],(time()+ 60*5) ,"/");
    

} else {
    $_SESSION["ultimo_acesso"] = date("d/m/Y H:i:s");

    echo "Usuário: " . $_SESSION["usuario"] . " já está logado.<br>";
    echo "Sehnha: " . $_SESSION["senha"] . "<br>";
    echo "Início da sessão: " . $_SESSION["inicio_sessao"] . "<br>";
    echo "Último acesso: " . $_SESSION["ultimo_acesso"] . "<br>";

    echo "tempo de sessão: " . (strtotime($_SESSION["ultimo_acesso"]) - strtotime($_SESSION["inicio_sessao"])) . " segundos.<br>";
    setcookie("inicio_sessao",$_SESSION["inicio_sessao"],(time()+ 60*5) ,"/");
}

if (isset($_COOKIE["usuario"]) || isset($_COOKIE["senha"]) || isset($_COOKIE["inicio_sessao"])) {
    if(isset($_COOKIE["usuariocookie"])){
        echo "Usuário do Cookie: " . $_COOKIE["usuariocookie"] . "<br>";
    }
    if(isset($_COOKIE["senhacookie"])){
        echo "Senha do Cookie: " . $_COOKIE["senhacookie"] . "<br>";
    }
    echo "Início da sessão do Cookie: " . $_COOKIE["inicio_sessao"] . "<br>";
} else {
    echo "Cookie expirado ou não existe!<br>";
}
