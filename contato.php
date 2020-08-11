<?php

$erro_newsletter = '';
$sucesso_newsletter = '';

//validação do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //formulário de email
    if ($_POST['formulario'] == 'email') {
        $erro = '';

        //verifica se existem todos os campos
        if (
            !isset($_POST['text_email'])
            || !isset($_POST['text_assunto'])
            || !isset($_POST['text_mensagem'])
        ) {
            $erro = 'Pelo menos um dos campos não existe';
        }

        $email = $_POST['text_email'];
        $assunto = $_POST['text_assunto'];
        $mensagem = $_POST['text_mensagem'];
        // se os campso estão preenchidos
        if (empty($erro)) {
            // ver se o email é valido
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erro = 'Endereço de email inválido.';
            }
        }
        // envio de email
        if (empty($erro)) {
            include 'enviar_email.php';
        }
    }
}
?>
<div class="container">
    <div class="row" mt-2 mb-2>
        <div class="offset-3 col-6">
            <h1>Contatos</h1>
            <form action="?p=contato" method="post">
                <input type="hidden" name="formulario" value="email">
                <div class="form-group">
                    <input type="email" name="text_email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="text_assunto" class="form-control" placeholder="Assunto" required>
                </div>
                <div class="form-group">
                    <textarea name="text_mensagem" class="form-control" cols="60" rows="3" required></textarea>
                </div>
                <div class="text-center">
                    <input type="submit" value="Enviar Mensagem" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
    <div class="row" style="margin-botton: 150px">
        <div class="offset-3 col-6">
            <hr>
            <h1>Newsletter</h1>
            <form action="?p=contato" method="post">
                <input type="hidden" name="formulario" value="newsletter">
                <div class="form-group">
                    <input type="email" name="text_email" class="form-control" placeholder="Email" required>
                </div>
                <div class="text-center">
                    <input type="submit" value="Receber Newsletter" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="mb-5"></div>