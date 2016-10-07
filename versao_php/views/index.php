<?php

    // ----- importa arquivo de configuração de sistema -----
    require 'config.php';

    define('TITLE', 'Não Pertube');
    define('KEY_WORDS', 'Procon pb, Não Pertube, Bloquear Telemarketing');

    $PATH_CSS_BOOTSTRAP = '"assets/bootstrap/css/bootstrap.min.css"';
    $PATH_CSS_STYLE = 'assets/css/style.css';

    $PATH_IMG_LOGO = 'assets/img/procon.png';

    $PATH_LINK_LOGIN = '../controller/login.php?action=login';

    $PATH_JS_JAQUERY = 'assets/js/jquery-1.8.2.min.js';
    $PATH_JS_BOOTSTRAP = 'assets/bootstrap/js/bootstrap.min.js';
    $PATH_JS = 'assets/js/scripts.js';

    // ----- importar o head do html -----
    require '/tampletes/header.tpl';
    // ----- importa o conteudo html -----
    require '/tampletes/contenter.tpl';
