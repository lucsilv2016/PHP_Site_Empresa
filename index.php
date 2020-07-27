<?php

include('layout/html_header.php');
include('layout/nav.php');

$pag = $_GET['p'];

if (isset($_GET['p'])) {
    $pag = $_GET['p'];
  }

    switch ($pag) {

      //lgout
      case 'logout':
        session_destroy();
        Header('Location: '.$_SERVER['PHP_SELF']);
        return; 
      break;
      case 'inicio':
        include('inicio.php');
        break;
      case 'empresa':
        include('empresa.php');
        break;
      case 'servico':
        include('servico.php');
        break;        
      case 'contato':
        include('contato.php');
        break;   

      default:
        include('inicio.php');
        break;
    }

include('layout/footer.php');
include('layout/html_footer.php');
