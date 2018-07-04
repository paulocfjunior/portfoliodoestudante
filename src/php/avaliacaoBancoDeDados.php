<?php
session_start();
require_once("conecta.php");

if(!empty($_POST['estrela'])){
    $estrela = $_POST['estrela'];
    $mensagem = $_POST['mensagem'];
    $nome = $_POST['nome'];

    //Salvar no banco de dados
    $result_avaliacoes = "INSERT INTO avaliacoes (quantidade_estrelas, mensagem, nome,  created) VALUES ('$estrela','$mensagem','$nome', NOW())";
    $resultado_avaliacoes = mysqli_query($conexao, $result_avaliacoes);

    if(mysqli_insert_id($conexao)){
        $_SESSION['msg'] = "Avaliação enviada com sucesso";
        header("Location: avaliacao.php");
    }else{
        $_SESSION['msg'] = "Desculpa, sua avaliação não foi enviada :(";
        header("Location: avaliacao.php");
    }

}else{
    $_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";
    header("Location: avaliacao.php");
}

