<<<<<<< HEAD
<?php
    $host ="localhost";
    $usuario ="root";
    $senha ="";
    $banco="loginphp";

    $conexao = new MySQLi("$host","$usuario","$senha","$banco");


    if($conexao -> connect_error){
        echo "Erro de Conexão!!!";
    }else {
        // echo "Sucesso";
    }



=======
<?php
    $host ="localhost";
    $usuario ="root";
    $senha ="";
    $banco="loginphp";

    $conexao = new MySQLi("$host","$usuario","$senha","$banco");


    if($conexao -> connect_error){
        echo "Erro de Conexão!!!";
    }else {
        // echo "Sucesso";
    }



>>>>>>> 25af8b36c1f7c2c6b02ff43eecafbb07c56ccf1b
?>