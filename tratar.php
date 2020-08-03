<?php

//verificar se os campos existem 
if (!isset($_POST['text_usuario']) || !isset($_POST['text_senha'])) {
    die('erro - Não existem os campos necessários');
}
//verificar se todos os campos estão preenchidos
if (empty($_POST['text_usuario'])) {
    die('erro - O usuário tem que ser preenchido');
}
if (empty($_POST['text_senha'])) {
    die('erro - A senha tem que ser preenchido');
}

$usuario = $_POST['text_usuario'];
$senha = $_POST['text_senha'];

//verificar se o usuário tem entre 5 e 10 caracteres
if (strlen($senha) <= 3 || strlen($senha) >= 16) {
    die('erro - Digite entre 3 e 16 caracteres.');
}

//verificar se o usuário e senha existem
if ($usuario==$u && $senha==$s) {
    die('Login com sucesso.');
  }else{
    die('Login inválido');
  }

  echo 'Usuário:'.$usuario;
  echo '<br>';
  echo 'Senha:' .$senha;