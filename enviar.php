<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o email do formulário
    $email = $_POST['email'];

    
    $to = "blackangelsofensive@proton.me";
    $subject = "Novo cadastro no site - Black Angels";
    $message = "Novo candidato para os Black Angels: " . $email;
    $headers = "From: no-reply@seudominio.com";

    mail($to, $subject, $message, $headers);

    // Mensagem de agradecimento após o envio
    echo "Seu cadastro foi enviado com sucesso. Entraremos em contato em breve.";
} else {
    echo "Método de requisição inválido.";
}
?>
