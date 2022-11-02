<?php

// Importa a configuração do site:
require($_SERVER['DOCUMENT_ROOT'] . '/includes/_config.php');

/***************************************************
 * Todos os códigos PHP desta página INICIAM aqui! *
 ***************************************************/

// Obtém o ID do artigo diretamente da URL:
$id = intval($_SERVER['QUERY_STRING']);

// Se o ID é ZERO...
if ($id == 0)
    // Mostra a página 404:
    header('Location: /404');

// SQL que otém o artigo completo:
$sql = <<<SQL

-- Seleciona TODOS (*) os campos do artigo:
SELECT *,

    -- Formata data de publicação para pt-br:
    DATE_FORMAT(adate, '%d de %M de %Y às %H:%i') AS adatebr

FROM articles

-- Obtém também os dados do autor do artigo correspondente:
INNER JOIN users ON uid = author

-- Somente o artigo com o ID especificado:
WHERE aid = '{$id}'

    -- E com status 'online':
    AND astatus = 'online'

    -- E NÃO agendado para o futuro:
    AND adate <= NOW();

SQL;

// Executar o SQL e armazena os resultados em '$res':
$res = $conn->query($sql);

// Se não achou o artigo...
if ($res->num_rows != 1)
    // Mostra a página 404:
    header('Location: /404');

// Extrai os dados do artigo:
$art = $res->fetch_assoc();

// SQL que obtém OUTROS artigos do autor do artigo atual:
$sql = <<<SQL

-- Só precisamos do ID e do título dos artigos:
SELECT aid, title
FROM articles

-- Seleciona todos os artigos de um autor específico:
WHERE author = '{$art['author']}'

    -- Usamos os mesmos filtros das outras consultas aos artigos:
    AND astatus = 'online'
    AND adate <= NOW()

    -- Não pega o artigo atual, que já aparece na página:
    AND aid != '{$id}'

-- Obtém os artigos de forma aleatória:
ORDER BY RAND()

-- Obtém no máximo 5 artigos:
LIMIT 5;

SQL;

// Extrai a lista de artigos do autor:
$res = $conn->query($sql);

// Se tem artigos:
if ($res->num_rows > 0) :

    // Inicializa a lista de artigos:
    $author_articles = '<h3>+ Artigos</h3><ul>';

    // Loop para obter cada um dos artigos:
    while ($aart = $res->fetch_assoc()) :

        // Monta a lista:
        $author_articles .= "<li><a href=\"view.php?{$aart['aid']}'\">{$aart['title']}</a></li>";

    endwhile;

    $author_articles .= "</ul>";

endif;

// Calcula idade do autor:
$age = agecalc($art['birth']);

// Monta avisualização do artigo
$page_content .= <<<HTML

<h2>{$art['title']}</h2>

<small>Por {$art['name']}.</small><br>
<small>Em {$art['adatebr']}.</small>

{$art['content']}

<p>══════════════════</p>

<div>

    <img src="{$art['photo']}" alt="{$art['name']}">
    <h3>{$art['name']}</h3>
    <ul>
        <li>E-mail: {$art['email']}</li>
        <li>Idade: {$age} anos</li>
    </ul>
    <p>{$art['bio']}</p>
    {$author_articles}

</div>

HTML;

// Define o título do documento:
$page_title = $art['title'];

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