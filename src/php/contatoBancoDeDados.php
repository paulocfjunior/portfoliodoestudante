<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

require '../vendor/autoload.php';

$from = new SendGrid\Email(null, "$email");
$subject = "Mensagem de contato";
$to = new SendGrid\Email(null, "eltonmiranda15@gmail.com");
$content = new SendGrid\Content("text/html", "Olá, Elton<br><br>Nova mensagem de contato <br><br>Nome: $nome<br>Email: $email <br>
Mensagem: $mensagem");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

//Necessário inserir a chave
$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo "Mensagem enviada com sucesso!";

?>
</body>
</html>
