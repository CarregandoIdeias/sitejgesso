<?php

require_once('phpmailer/class.phpmailer.php');


$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$mensagem = $_POST['mensagem'];


$phpmail = new PHPMailer();
$phpmail->IsSMTP(); // envia por SMTP
$phpmail->Host = "smtp.jgesso.com"; // SMTP servers
$phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
$phpmail->Username = "contato@jgesso.com"; // SMTP username
$phpmail->Password = "caminho94"; // SMTP password
$phpmail->IsHTML(true);
$phpmail->From = 'contato@jgesso.com';
$phpmail->FromName = $_POST['José Antonio'];
$phpmail->AddAddress ("contato@jgesso.com");



$phpmail->Subject = $assunto;
$phpmail->Body .= "Nome: ".$_POST['nome']."";
$phpmail->Body .= "Email: ".$_POST['email']."";
$phpmail->Body .= "Telefone: ".$_POST['tel']."";
$phpmail->Body .= "Mensagem: ".nl2br($_POST['mensagem'])."";

$send = $phpmail->Send();
if($send){
echo "A Mensagem foi enviada com sucesso.";
}else{
echo "Não foi possível enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
}

echo $erros;
echo "<script>window.location = 'http://www.jgesso.com';</script>"; //Altere aqui para o endereço de sua página.
exit;

?>