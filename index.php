<?php

// Importa o arquivo de configurações do site:
require('inc/config.php');

// Obtém a rotaq da página a ser exibida e armazena em '$route':
$route = htmlspecialchars(trim($_SERVER['QUERY_STRING']));

// Se '$route' está vazia, ou seja, não especificou uma rota...
if ($route == '') :

    // A página inicial será carregada:
    $route = 'home';

endif;

// Monta os caminhos para os componentes da rota:
$page = array(
    "php" => "pages/{$route}/index.php",
    "css" => "pages/{$route}/style.css",
    "js" => "pages/{$route}/script.js"
);

// Se a rota NÃO aponta para uma página...
if (!file_exists($page['php'])) :

    // Aponta $page para a página de erro 404:
    $page = array(
        "php" => "pages/404/index.php",
        "css" => "pages/404/style.css",
        "js" => "pages/404/script.js"
    );

endif;

// Carrega o componente PHP da rota:
require($page['php']);

// Se o arquivo CSS da rota existe...
if (file_exists($page['css'])) :

    // Cria a tag que carrefga o CSS na '/index.php':
    $page_css = "<link rel=\"stylesheet\" href=\"/{$page['css']}\">";

endif;

// Se o arquivo JavaScript da rota existe...
if (file_exists($page['js'])) :

    // Cria a tag que carrefga o JavaSCript na '/index.php':
    $page_js = "<script src=\"/{$page['js']}\"></script>";

endif;

// Se definiu um titulo para a página → <title>...</title>
if ($page_title != '') :

    // A tag <title> conterá o título da página:
    $tag_title = "{$c['sitename']} ·:· {$page_title}";

// Se não definiu um título...
else :

    // A tag <title> conterá o slogan do site:
    $tag_title = "{$c['sitename']} ·:· {$c['siteslogan']}";

endif;

?>
<!DOCTYPE html>

<!-- Referências: https://www.w3schools.com/html/ -->

<!-- Início do documento HTML -->
<html lang="pt-br">

<!-- Cabeçalho com metadados do documento -->

<head>

    <!-- Carrega a tabela de caracteres universal -->
    <meta charset="UTF-8">

    <!-- Deixa a página responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Carrega a folha de estilos do template -->
    <link rel="stylesheet" href="<?php echo $c['sitecss'] ?>">

    <?php
    // Carrega a folha de estilos da rota, se existir:
    echo $page_css;
    ?>

    <!-- Ícone de favoritos -->
    <link rel="shortcut icon" href="<?php echo $c['favicon'] ?>">

    <!-- Título do documento -->
    <title><?php echo $tag_title ?></title>

</head>

<body>

    <!-- Âncora de retorno ao topo da página -->
    <a id="top"></a>

    <!-- Wrap da página -->
    <div id="wrap">

        <!-- Cabeçalho -->
        <header>

            <!-- Logotipo -->
            <a href="/" title="Página inicial">
                <img src="<?php echo $c['sitelogo'] ?>" alt="Logotipo de <?php echo $c['sitename'] ?>">
            </a>

            <!-- Nome / slogan do site -->
            <h1>
                <?php echo $c['sitename'] ?>
                <span><?php echo $c['siteslogan'] ?></span>
            </h1>
        </header>

        <!-- Menu principal -->
        <nav>

            <a href="/" title="Página inicial">
                <i class="fa-fw fa-solid fa-house-chimney"></i>
                <span>Início</span>
            </a>
            <a href="/?contacts">
                <i class="fa-fw fa-solid fa-comment-dots"></i>
                <span>Contatos</span>
            </a>
            <a href="/?about">
                <i class="fa-fw fa-solid fa-circle-info"></i>
                <span>Sobre</span>
            </a>
            <a href="/?profile">
                <i class="fa-fw fa-solid fa-user"></i>
                <span>Login</span>
            </a>

        </nav>

        <main><?php echo $page_content ?></main>

        <!-- Rodapé -->
        <footer>

            <div id="ftop">

                <!-- Link para a página inicial -->
                <a href="/" title="Página inicial">
                    <i class="fa-fw fa-solid fa-house-chimney"></i>
                </a>

                <!-- Licença do aplicativo -->
                <div>&copy; 2022 <?php echo $c['sitename'] ?></div>

                <!-- Link para o topo desta página → <a id="top"></a> -->
                <a href="#top">
                    <i class="fa-fw fa-solid fa-circle-up"></i>
                </a>

            </div>

            <div id="fbottom">

                <nav>
                    <h4>Redes sociais:</h4>

                    <a href="https://facebook.com/<?php echo $c['sitename'] ?>" target="_blank" title="Acesse nosso Facebook">
                        <i class="fa-brands fa-square-facebook fa-fw"></i>
                        <span>Facebook</span>
                    </a>

                    <a href="https://youtube.com/<?php echo $c['sitename'] ?>" target="_blank" title="Acesse nosso Youtube">
                        <i class="fa-brands fa-square-youtube fa-fw"></i>
                        <span>Youtube</span>
                    </a>

                    <a href="https://github.com/<?php echo $c['sitename'] ?>" target="_blank" title="Acesse nosso GitHub">
                        <i class="fa-brands fa-square-github fa-fw"></i>
                        <span>GitHub</span>
                    </a>

                </nav>

                <nav>

                    <h4>Links rápidos:</h4>
                    <a href="/?contacts">
                        <i class="fa-fw fa-solid fa-comment-dots"></i>
                        <span>Contatos</span>
                    </a>
                    <a href="/?about">
                        <i class="fa-fw fa-solid fa-circle-info"></i>
                        <span>Sobre</span>
                    </a>
                    <a href="/?policies">
                        <i class="fa-solid fa-user-lock fa-fw"></i>
                        <span>Privacidade</span>
                    </a>

                </nav>

            </div>

        </footer>

        <!-- Rack que aplica margem inferior a <footer> -->
        <span>&nbsp;</span>

    </div>

    <!-- Carrega a boblioteca JavaScript "jQuery" à partir de CDNJS.  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Carrega o JavaScript do aplicativo -->
    <script src="/script.js"></script>

    <?php
    // Insere o JavaScript da rota, caso exista:
    echo $page_js;
    ?>

</body>

</html>