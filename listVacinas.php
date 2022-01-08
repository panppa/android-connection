<?php
include "conexao.php";
$cpf = $_POST['cpf'];
$sql_read = "SELECT * FROM vacinacao WHERE cpfPaciente = $cpf";
$dados = $PDO ->query($sql_read);
$preResultado = array();
$cont = 0;
while($vacinacao  = $dados->fetch(PDO::FETCH_OBJ)){
    $cont ++;
    $preResultado[$cont] = array("vacina"=>$vacinacao-> vacina);
    $idVac=$preResultado[$cont]['vacina'];
    $sqlNomeVac= "SELECT nome FROM vacina WHERE id=$idVac";
    $dadosVac = $PDO ->query($sqlNomeVac);
    $nomeVac=array();
    while($vacina = $dadosVac->fetch(PDO::FETCH_OBJ)){
        $nomeVac = array("nome"=> $vacina -> nome);
    }
    //print_r($nomeVac);            
    //print_r($resultado[$cont]['vacina']);       
    $resultado[]=array(
                        "id"=>$vacinacao-> id,
                        "vacina"=>$vacinacao-> vacina,
                        "lote"=>$vacinacao-> lote,
                        "validade"=>$vacinacao-> validade,
                        "dataVacinacao"=>$vacinacao-> dataVacinacao,
                        "cpfPaciente"=>$vacinacao-> cpfPaciente,
                        "cpfFuncionario"=>$vacinacao-> cpfFuncionario,
                        "nomeVacina"=>  $nomeVac['nome']);
}
echo json_encode($resultado);
?>