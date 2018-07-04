<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
// Essa parte do PHP é controlada pelo PHPMailer, aonde eu consigo enviar uma mensagem diretamente pro meu e-mail de um formulário.
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$dinheiro = $_POST['dinheiro'];
//colocar as variaveis no devido lugar
require '../vendor/autoload.php';

$from = new SendGrid\Email(null, "$email");
$subject = "Mensagem de solicitacao";
$to = new SendGrid\Email(null, "eltonmiranda15@gmail.com");
$content = new SendGrid\Content("text/html", "Olá, Elton<br><br>Nova mensagem de <strong>solicitação</strong> <br><br><strong>Nome:</strong> $nome<br><strong>Email:</strong> $email <br>
<strong>Mensagem:</strong> $mensagem <br><strong>Assunto:</strong> $assunto <br> <strong>Valor:</strong>$dinheiro");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

//Necessário inserir a chave
//Essa chave se consegue quando faz a conta no site, caso houver duvidas, procure video aula do Celque para mais informações
$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo "Mensagem enviada com sucesso!";

?>
</body>
</html>
