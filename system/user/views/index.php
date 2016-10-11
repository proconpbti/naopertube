<?php
// ----- importa arquivo de configuração de sistema -----
  include ('../../../config.php');

  //redirect_invalid_user();

  define('TITLE', 'Bloquei-e');
  define('KEY_WORDS', "");

  $PATH_CSS_BOOTSTRAP = '../../../views/assets/bootstrap/css/bootstrap.min.css';
  $PATH_CSS_STYLE = '../../../views/assets/css/style.css';

  $PATH_IMG_LOGO = '../../../views/assets/img/procon.png';

  $PATH_LINK_LOGOUT = '../../../controller/validarlogin.php?action=logout';

  $PATH_JS_JAQUERY = '../../../views/assets/js/jquery-1.8.2.min.js';
  $PATH_JS_BOOTSTRAP = '../../../views/assets/bootstrap/js/bootstrap.min.js';
  $PATH_JS = '../../../views/assets/js/scripts.js';

  // ----- importar o head do html -----
  include('../../../views/templates/header.tpl');
  // ----- importar o conteudo html -----
