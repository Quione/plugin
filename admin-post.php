<?php
    echo "<h3>Mensagem Enviada!</h3>";

    echo "<p>EMAIL: ".$_POST['email']."</p>";
    echo "<p>ASSUNTO: ".$_POST['assunto']."</p>";
    echo "<p>MENSAGEM: ".$_POST['mensagem']."</p>";

    $emaildestinatario = $_POST['email'];
    $headers = "From= quionesnoww@gmail.com\n";
    $emailsender = "From: quionesnoww@gmail.com\n";
    $assunto = $_POST['assunto'];
    $mensagemHTML = $_POST['mensagem'];

    if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r".$emailsender)){
        $headers.="Return-Path: " , $emailsender;mail($emaildestinatario,$assunto, $mensagemHTML, $headers);
    }
?>