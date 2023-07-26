<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se as variáveis do formulário estão definidas
    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["mensagem"])) {
        // Informações do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        // E-mail de destino
        $email_destino = "renanfeluck@gmail.com";

        // Assunto do e-mail
        $assunto = "Formulário de Contato - Mensagem de $nome";

        // Corpo do e-mail
        $corpo_email = "Nome: $nome\n";
        $corpo_email .= "E-mail: $email\n";
        $corpo_email .= "Mensagem:\n$mensagem";

        // Cabeçalhos do e-mail
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Envia o e-mail
        if (mail($email_destino, $assunto, $corpo_email, $headers)) {
            echo "E-mail enviado com sucesso!";
        } else {
            echo "Erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
        }
    } else {
        echo "Todos os campos do formulário devem ser preenchidos.";
    }
}
?>
