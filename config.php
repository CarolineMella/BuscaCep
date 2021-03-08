<?php
// Recebendo requisição
$cepNumber = strval($_POST['cep']);

// Função que faz a requisição para API
function getCep($cepNumber) {
    $cepNumber = preg_replace("/[^0-9]/","",$cepNumber);
    $url = "https://viacep.com.br/ws/$cepNumber/xml/";
    $xml = simplexml_load_file($url);
    return $xml;
}

// Conectando com DB
$conn = new PDO('mysql:host=localhost;dbname=sistema-cep', 'root', '');

// Verificando se já existe o cep no DB
$find = $conn->prepare("SELECT cep FROM dados_cep WHERE cep=:cepNumber ");
$find->bindParam(':cepNumber', $cepNumber);
$find->execute();
$result = $find->fetchAll();

if(count($result) === 0) {
    $getendereco = getCep($cepNumber);
    // Se retornar pelo menos 1 informação(ex:cep) === Cep encontrado logo passa para prox verificação
    if($getendereco->cep){
        // Salvando os dados nas variáveis
        $street = $getendereco->logradouro;
        $bairro = $getendereco->bairro;
        $cidade = $getendereco->localidade;
        $estado = $getendereco->uf;
        // Inserindo as dados no banco de dados
        $query = $conn->prepare("INSERT INTO dados_cep(cep, rua, bairro, cidade, estado) VALUES(:cepNumber, :street, :bairro, :cidade, :estado)");
        $query->bindValue( ':cepNumber', $cepNumber,  PDO::PARAM_STR );
        $query->bindValue( ':street', $street,  PDO::PARAM_STR );
        $query->bindValue( ':bairro', $bairro,  PDO::PARAM_STR );
        $query->bindValue( ':cidade', $cidade,  PDO::PARAM_STR );
        $query->bindValue( ':estado', $estado,  PDO::PARAM_STR );
        $query->execute();
        $query = $conn->prepare("SELECT * FROM dados_cep WHERE cep=:cepNumber");
        $query->bindParam(':cepNumber', $cepNumber);
        $query->execute();
        $result = $query->fetchAll();
    } else {
        header('Location: error.php');
    }
}