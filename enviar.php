<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Aqui, você pode adicionar código para enviar o email ou salvar as informações em um banco de dados.
    // Lembre-se de que esta é uma estrutura básica e você deve personalizá-la de acordo com suas necessidades.

    // Exemplo de envio de e-mail (requer configurações de servidor de e-mail):
    $destinatario = "thales_bichego@outlook.com";
    $assunto = "Mensagem do formulário de contato de $nome";
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Mensagem:\n$mensagem";

    if (mail($destinatario, $assunto, $corpo)) {
        // Email enviado com sucesso
        echo "Obrigado, $nome! Sua mensagem foi enviada com sucesso.";
    } else {
        // Erro no envio do email
        echo "Desculpe, houve um erro no envio da mensagem. Tente novamente mais tarde.";
    }
} else {
    // Redireciona para a página de formulário se não for uma requisição POST
    header("Location: formulario.html");
    exit;
}
?>
