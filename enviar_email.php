<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    // Endereço de e-mail para onde o formulário será enviado
    $to = "barbarahansen1233@gmail.com"; // Substitua pelo seu endereço de e-mail
    
    // Assunto do e-mail
    $subject = "Novo pedido de inscrição";
    
    // Corpo do e-mail
    $message = "Nome: " . $name . "\n";
    $message .= "E-mail: " . $email . "\n";
    
    // Envia o e-mail
    if (mail($to, $subject, $message)) {
        // Se o e-mail for enviado com sucesso, aguarda 2 segundos e redireciona de volta para a página inicial
        sleep(2);
        header("Location: index.html");
        exit;
    } else {
        // Se houver um erro no envio do e-mail, exibe uma mensagem de erro
        echo "Ocorreu um erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
    }
} else {
    // Se o método de requisição não for POST, exibe uma mensagem de erro
    echo "Erro: método de requisição inválido.";
}
?>
