<?php
include "conexao.php";

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$nascimento = $_POST['nascimento'];
$senha = $_POST['senha'];
$alergia = $_POST['alergia'];


$sql_insert = "INSERT INTO paciente (cpf, nome, sobrenome, email, telefone, genero, nascimento, senha, alergia) VALUES(:CPF, :NOME, :SOBRENOME, :EMAIL, :TELEFONE, :GENERO, :NASCIMENTO, :SENHA, :ALERGIA)";

$stmt = $PDO -> prepare($sql_insert);

$stmt->bindParam(':CPF', $cpf);
$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':SOBRENOME', $sobrenome);
$stmt->bindParam(':EMAIL', $email);
$stmt->bindParam(':TELEFONE', $telefone);
$stmt->bindParam(':GENERO', $genero);
$stmt->bindParam(':NASCIMENTO', $nascimento);
$stmt->bindParam(':SENHA', $senha);
$stmt->bindParam(':ALERGIA', $alergia);

if($stmt->execute()){
    $dados = array("CREATE"=>"sucesso");
}else{
    $dados = array("CREATE"=>"erro");
}
echo json_encode ($dados);
?>