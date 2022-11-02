<?php

// Importa a configuração do site:
require($_SERVER['DOCUMENT_ROOT'] . '/includes/_config.php');

/***************************************************
 * Todos os códigos PHP desta página INICIAM aqui! *
 ***************************************************/

 // Define o título do documento:
$page_title = 'Erro 404';

// Define o conteúdo da página:
$page_content = "
<h2>Oooops!</h2>
<p>O conteúdo que você está tentando acessar não está disponível ou não existe...</p>
";

/****************************************************
 * Todos os códigos PHP desta página TERMINAM aqui! *
 ****************************************************/

// Cabeçalho da página HTML:
require($_SERVER['DOCUMENT_ROOT'] . '/includes/_header.php');

/******************************************************
 * Todo código HTML visível desta página COMEÇA aqui! *
 ******************************************************/
?>

<?php echo $page_content ?>

<?php
/*******************************************************
 * Todo código HTML visível desta página TERMINA aqui! *
 *******************************************************/

// Rodapé da página HTML:
require($_SERVER['DOCUMENT_ROOT'] . '/includes/_footer.php');
?>