<?php

// Importa a configuração do site:
require($_SERVER['DOCUMENT_ROOT'] . '/includes/_config.php');

/***************************************************
 * Todos os códigos PHP desta página INICIAM aqui! *
 ***************************************************/

 // Define o título do documento:
$page_title = 'Políticas de Privacidade';

// Define o conteúdo da página:
$page_content = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat id repellat unde vitae corrupti in laudantium pariatur possimus exercitationem inventore rerum praesentium quis veniam incidunt dolorum, animi accusamus itaque iusto.</p>";

/****************************************************
 * Todos os códigos PHP desta página TERMINAM aqui! *
 ****************************************************/

// Cabeçalho da página HTML:
require($_SERVER['DOCUMENT_ROOT'] . '/includes/_header.php');

/******************************************************
 * Todo código HTML visível desta página COMEÇA aqui! *
 ******************************************************/
?>

<h2><?php echo $page_title ?></h2>
<?php echo $page_content ?>

<?php
/*******************************************************
 * Todo código HTML visível desta página TERMINA aqui! *
 *******************************************************/

// Rodapé da página HTML:
require($_SERVER['DOCUMENT_ROOT'] . '/includes/_footer.php');
?>