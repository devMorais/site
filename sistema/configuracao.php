<?php

use sistema\Nucleo\Helpers;

//Arquivo de configuração do sistema
//define o fuso horario
date_default_timezone_set('America/Sao_Paulo');

//informações do sistema
define('SITE_NOME', 'devmorais');
define('SITE_DESCRICAO', 'devmorais - Soluções Digitais');

//urls do sistema
define('URL_PRODUCAO', 'https://devmorais.com.br');
define('URL_DESENVOLVIMENTO', 'http://localhost/devmorais');

if (Helpers::localhost()) {
    //dados de acesso ao banco de dados em localhost
    define('DB_HOST', 'localhost');
    define('DB_PORTA', '3306');
    define('DB_NOME', 'devmorais');
    define('DB_USUARIO', 'root');
    define('DB_SENHA', '');

    define('URL_SITE', 'devmorais/');
    define('URL_ADMIN', 'devmorais/admin/');
} else {
    //dados de acesso ao banco de dados na hospedagem
    define('DB_HOST', 'localhost');
    define('DB_PORTA', '3306');
    define('DB_NOME', 'devmorais');
    define('DB_USUARIO', 'devmorais');
    define('DB_SENHA', '');

    define('URL_SITE', '/');
    define('URL_ADMIN', '/admin/');
}

//autenticação do servidor de emails
define('EMAIL_HOST', 'smtp.hostinger.com');
define('EMAIL_PORTA', '465');
define('EMAIL_USUARIO', 'contato@devmorais.com.br');
define('EMAIL_SENHA', 'Caita92*/');
define('EMAIL_REMETENTE', ['email' => EMAIL_USUARIO, 'nome' => SITE_NOME]);

