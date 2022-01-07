<?php
include "conexao.php";

$cpf = $_POST['cpf'];


$sql_read = "SELECT * FROM vacinacao WHERE cpfPaciente = $cpf";
$dados = $PDO ->query($sql_read);
$resultado = array();
while($vacinacao  = $dados->fetch(PDO::FETCH_OBJ)){
    $resultado[] = array("id"=>$vacinacao-> id,
                         "vacina"=>$vacinacao-> vacina,
                         "lote"=>$vacinacao-> lote,
                         "validade"=>$vacinacao-> validade,
                         "dataVacinacao"=>$vacinacao-> dataVacinacao,
                         "cpfPaciente"=>$vacinacao-> cpfPaciente,
                         "cpfFuncionario"=>$vacinacao-> cpfFuncionario
                    );
}
echo json_encode($resultado);
?>