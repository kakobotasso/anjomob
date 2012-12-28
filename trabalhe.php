<?php
    include("phpmailer/class.phpmailer.php");
    //$dados = $_REQUEST['contato'];
    
    $body = "Just Testing";
    
    $mail = new PHPMailer();
    $mail->IsMail(true);
    $mail->IsHTML(true);
    $mail->From = $_POST['email'];
    $mail->FromName = $_POST['nome'];
    $mail->AddAddress("kakodev@gmail.com", "Kako Botasso");
    $mail->Subject = "Trabalhe Conosco - ".$_POST['assunto'];
    $mail->Body = $body;
    
    if( $mail->Send() ){
        echo "<script>alert('E-mail enviado com sucesso'); window.location.href='vagas.html'</script>";
    }else{
        echo "<script>alert('Erro ao enviar e-mail, tente novamente mais tarde'); window.location.href='trabalhe-conosco.html'</script>";
    }
?>