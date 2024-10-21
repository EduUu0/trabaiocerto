<?php
include 'config.php';  // Inclui a configuração do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];           // Obtém o valor do campo ID
    $nome = $_POST["nome"];       // Obtém o valor do campo nome
    $descricao = $_POST["descricao"]; // Obtém o valor do campo sobrenome
    $preco_venda = $_POST["preco_venda"];   // Obtém o valor do campo telefone
    $preco_custo = $_POST["preco_custo"];   // Obtém o valor do campo telefone
    $quantidade_estoque = $_POST["quantidade_estoque"];   // Obtém o valor do campo telefone
    $unidade_medida = $_POST["unidade_medida"];   // Obtém o valor do campo telefone

    // Atualiza os dados na tabela pessoas
    $sql = "UPDATE usuarios SET nome='$nome', descricao='$descricao', preco_venda='$preco_venda', preco_custo='$preco_custo', quantidade_estoque='$quantidade_estoque', unidade_medida='$unidade_medida' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");  // Redireciona para a página principal se a atualização for bem-sucedida
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;  // Exibe um erro se a atualização falhar
    }
}

$conn->close();  // Fecha a conexão com o banco de dados
?>
