<?

$destinatario = "dedini.fabio@gmail.com";

$nomesobrenome = $_REQUEST['nomesobrenome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];
$assunto = 'Contato site livro';

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "Mensagem" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nomesobrenome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("obrigado.html");


?>