<?php

// Importa o arquivo de configurações do site:
require('inc/config.php');

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
    <link rel="stylesheet" href="/style.css">

    <!-- Ícone de favoritos -->
    <link rel="shortcut icon" href="<?php echo $c['favicon'] ?>">

    <!-- Título do documento -->
    <title><?php echo $c['sitename'] ?> ·:· <?php echo $c['siteslogan'] ?></title>

</head>

<body>

    <!-- Âncora de retorno ao topo da página -->
    <a id="top"></a>

    <!-- Wrap da página -->
    <div id="wrap">

        <!-- Cabeçalho -->
        <header>

            <!-- Logotipo usando Font Awesome -->
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

        <main>

            <article>
                <h2>Conteúdo</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum dolorem animi dicta maxime optio a quae ad voluptas officia nisi nam nihil, cumque reprehenderit amet ipsa et dolorum, suscipit labore!</p>
            </article>

            <aside>
                <h3>Complementos</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque eius iste id accusantium sint assumenda ea.</p>
            </aside>

        </main>

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

</body>

</html>