<?php

if(isset($_POST(['email']) && !empty($_POST(['email'])))){


$nome = addslashes($_POST('nome'));
$email = addslashes($_POST('email'));
$mensagem = addslashes($_POST('mensagem'));

}

$to = "mayaraalvesroman@gmail.com";
$subject = "Contato";
$body = "Nome: ".$nome. "/n"
        "Email: ".$email. "/n"
        "Mensagem: ".$mensagem. "/n";

$header = "From:mayara.roman16@gmail.com"."/r/n"
        ."Reply-To:".$email."/r/n"
        ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado")
}else{
    echo("erro")
}
?>