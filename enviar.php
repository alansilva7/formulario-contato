<?php 
    $to = "alan.scaje@gmail.com"; // destinátario - quem vai receber

    $assunto = "Formulário do site";

    $mensagem = $_POST['mensagem']. " - ".$_POST['nome'];

    $email = $_POST['email']; // remetente - quem vai enviar

    // Para enviar e-mail HTML, o cabeçalho Content-type deve ser definido
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // Cabeçalhos adicionais
    $headers[] = 'To: $to';
    $headers[] = 'From: $email';

    // Envia o e-mail
    mail($to, $assunto, $mensagem, implode("\r\n", $headers));

    if($status == true) {
        print "Mensagem foi enviada com sucesso!";
    } else {
        print "Não foi possivel enviar";
    }
?>