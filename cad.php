<?php                                                                                                 
include("conexao.php");   

$nome = $_POST['nome'];    
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

                                                           

$consuta = "INSERT INTO cadas(nome, email, senha)
VALUES('$nome','$email','$senha')";

if(mysqli_query($conexao, $consuta)){
    echo " o seu cadastro realizado com o sucesso";
}else{
        echo '  deu errado'.mysqli_error($conexao);
        
}


