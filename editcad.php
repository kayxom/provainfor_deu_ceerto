
<?php 
include ("conexao.php");
$id= $_POST['id'];
$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= password_hash($_POST['senha'],PASSWORD_DEFAULT);


//$consulta= "INSERT INTO usuario(nome, email, senha)
//VALUES('$nome','$email','$senha')";
$consulta = "UPDATE usuario set nome = '$nome',email ='$email',senha = '$senha'
WHERE id ='$id'";
if ($conexao=mysqli_query($conexao, $consulta)){
    echo"alteraçao  realizado com sucesso";
}
else{
    echo"erro ao se cadastrar com o banco".mysqli_connect_error($conexao);
}
?>
