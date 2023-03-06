<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "maiconandredasilva@gmail.com";
$subject = "Contato - maiconsilva.tech";
$body = "Nome: ".$nome."\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;

$header = "From:contato@maiconsilva.tech"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."X-Mailler:PHP/".phpversion();

if(mail($to,$subject,$body,$header)) {

    echo("Email enviado com sucesso!");

}else{

    echo("O email n達o pode ser enviado");

}

}

?>
