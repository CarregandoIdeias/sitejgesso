<?php 
 $mail = new PHPMailer();
 $mail->IsSMTP(); // envia por SMTP 
 $mail->CharSet = 'UTF-8';
 $mail->True;
 $mail->Host = "smtp.jgesso.com"; // Servidor SMTP
 $mail->Port = 587; 
 $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
 $mail->Username = "contato@jgesso.com"; // SMTP username
 $mail->Password = "caminho94"; // SMTP password
 $mail->From = "contato@jgesso.com"; // From
 $mail->FromName = "J Gesso - Acabamentos e Decorações" ; // Nome de quem envia o email
 $mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
 $mail->WordWrap = 50; // Definir quebra de linha
 $mail->IsHTML = true ; // Enviar como HTML
 $mail->Subject = $assunto ; // Assunto
 $mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

if(!$mail->Send()) // Envia o email

{ 
 echo "Erro no envio da mensagem";
} 
 
?>








