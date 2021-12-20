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

$sucesso = true;

if (!((is_null($nome))||($nome == ""))){
    $sql = "UPDATE paciente SET nome=:nome WHERE cpf=:cpf";
    $stmt = $PDO ->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':nome', $nome);

    if(!$stmt->execute()){
        $sucesso = false;
    }

}if (!((is_null($sobrenome ))||($sobrenome == ""))){
    $sql = "UPDATE paciente SET sobrenome=:sobrenome WHERE cpf=:cpf";
    $stmt = $PDO ->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':sobrenome', $sobrenome);

    if(!$stmt->execute()){
        $sucesso = false;
    }

}if (!((is_null($email ))||($email == ""))){
    $sql = "UPDATE paciente SET email=:email WHERE cpf=:cpf";
    $stmt = $PDO ->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':email', $email);

    if(!$stmt->execute()){
        $sucesso = false;
    }

}if (!((is_null($telefone ))||($telefone == ""))){
    $sql = "UPDATE paciente SET telefone=:telefone WHERE cpf=:cpf";
    $stmt = $PDO ->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':telefone', $telefone);

    if(!$stmt->execute()){
        $sucesso = false;
    }

}if (!((is_null($genero ))||($genero == ""))){
    $sql = "UPDATE paciente SET genero=:genero WHERE cpf=:cpf";
    $stmt = $PDO ->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':genero', $genero);
    
    if(!$stmt->execute()){
        $sucesso = false;
    }

}if (!((is_null($nascimento ))||($nascimento == ""))){
    $sql = "UPDATE paciente SET nascimento=:nascimento WHERE cpf=:cpf";
    $stmt = $PDO ->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':nascimento', $nascimento);

    if(!$stmt->execute()){
        $sucesso = false;
    }

}if (!((is_null($senha ))||($senha == ""))){
    $sql = "UPDATE paciente SET senha=:senha WHERE cpf=:cpf";
    $stmt = $PDO ->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':senha', $senha);

    if(!$stmt->execute()){
        $sucesso = false;
    }

}if (!((is_null($alergia ))||($alergia == ""))){
    $sql = "UPDATE paciente SET alergia=:alergia WHERE cpf=:cpf";
    $stmt = $PDO ->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':alergia', $alergia);

    if(!$stmt->execute()){
        $sucesso = false;
    }

}

if ($sucesso){
    $dados = array("CREATE"=>"sucesso");
}else{
    $dados = array("CREATE"=>"erro");
}
echo json_encode ($dados);

?>