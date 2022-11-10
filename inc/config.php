<?php

/**
 * Este é o arquivo de configuração inicial do aplicativo.
 * Ele deve ser importado com 'require()' logo no começo de todas as páginas 
 * PHP deste site.
 **/

/**
 * A coleção $c[] contém diversas configurações iniciais do site.
 * Esta variável e suas chaves definem algumas configurações de personalização 
 * do site como nome, logotipo e outros itens. Você pode/deve adicionar outros
 * itens aqui, conforme sua necessidade e vontade.
 **/ 
$c = array(
    'sitename' => 'Tech.Novatas',
    'siteslogan' => 'Toda mulher é capaz de tudo, inclusive programar.',
    'sitelogo' => '/img/logo01.png',
    'favicon' => '/img/favicon.png',
    'sitecss' => '/style.css'
);

/**
 * Dados para conexão com MySQL/MariaDB e database:
 * Os dados DEFAULT abaixo são para uso no XAMPP. Quando este site for 
 * hospedado na Internet, esses valores serão alterados e fornecidos pelo
 * provedor de hospedagem.
 **/
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'technovatas';

/**
 * Variáveis do aplicativo:
 * Todas as variáveis importantes para o aplicativo funcionar devem ser criadas
 * e definidas aqui.
 **/
$page_title = $page_content = $page_css = $page_js = $tag_title = '';

// Define a tabela de caracteres para UTF-8:
header('Content-Type: text/html; charset=utf-8');

// Define fuso horário do aplicativo para horário de Brasília:
date_default_timezone_set('America/Sao_Paulo');

// Conexão com o MySQL/MariaDB e com o banco de dados:
$conn = new mysqli($hostname, $username, $password, $database);

// Seta transações com MySQL/MariaDB para UTF-8:
$conn->query('SET NAMES utf8');
$conn->query('SET character_set_connection=utf8');
$conn->query('SET character_set_client=utf8');
$conn->query('SET character_set_results=utf8');

// Seta dias da semana e meses do MySQL/MariaDB para "português do Brasil":
$conn->query('SET GLOBAL lc_time_names = pt_BR');
$conn->query('SET lc_time_names = pt_BR');

// Importa a biblioteca de funções globais:
require('functions.php');
