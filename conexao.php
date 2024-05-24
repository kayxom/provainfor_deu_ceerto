<?php
$host ="localhost";
$user ="root";
$senha="";
$banco="cadastro";

$conexao = new mysqli($host,$user,$senha,$banco);
     if(!$conexao){
        echo 'deu errado'.mysqli_connect_error();
    //echo'de errado'.mysqli_connect_error();
}
else{
    //echo 'deu certo';

}

?>
