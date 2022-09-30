<?php
	$from     = $_POST['hian.pereiralima@gmail.com']; //remetente
	$to       = "hian.pereiralima2@gmail.com"; //destinatário
	$subject  = $_POST['Recuperação de Senha'];
	$message  = $_POST['Sua nova senha é'];

	$headers = 'MIME-Version: 1.0';
	$headers = 'Content-type: text/html; charset=iso-8859-1';
	$headers = 'From: ' . $from . "\r\n" .
			    'Reply-To: ' . $from . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status==true){
		print "Enviou mensagem";
	}else{
		print "Não foi possível enviar";
	}