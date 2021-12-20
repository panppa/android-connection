<?php
include "conexao.php";

$cpf = $_POST['cpf'];


$sql_read = "SELECT * FROM paciente WHERE cpf = $cpf";
$dados = $PDO ->query($sql_read);
$resultado;
while($paciente  = $dados->fetch(PDO::FETCH_OBJ)){
    $resultado = array("cpf"=>$paciente-> cpf,
                         "nome"=>$paciente-> nome,
                         "sobrenome"=>$paciente-> sobrenome,
                         "email"=>$paciente-> email,
                         "telefone"=>$paciente-> telefone,
                         "genero"=>$paciente-> genero,
                         "nascimento"=>$paciente-> nascimento,
                         "senha"=>$paciente-> senha,
                         "alergia"=>$paciente-> alergia);
}
echo json_encode($resultado);


?>