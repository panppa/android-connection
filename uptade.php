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

$sql = "UPDATE paciente SET nome=:nome, sobrenome=:sobrenome, email=:email, telefone=:telefone, genero=:genero, nascimento=:nascimento, senha=:senha, alergia =:alergia WHERE cpf=:cpf";
$stmt = $PDO ->prepare($sql);

$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':sobrenome', $sobrenome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':genero', $genero);
$stmt->bindParam(':nascimento', $nascimento);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':alergia', $alergia);

if($stmt->execute()){
    $dados = array("UPDATE"=>"sucesso");
}else{
    $dados = array("UPDATE"=>"erro");
}
echo json_encode ($dados);

?>