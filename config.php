<?php
/* 	*
	* Titulo: config.php
	* Desenvolvido por: Fabiano
	* Contato: fabiodeveloperti@gmail.com http://github.com/fabiosantosfb
	* Ultima modificação: 03-09-2016
	*
	* - Arquivo de configuração:
        * - Tem configurações do site em um único local .
        * - URLs e URIs como constantes .
        * - Inicia a sessão.
        * - Define como os erros serão tratadas.
        * - Define uma função de redirecionamento.

*/
// ******* INICIAR SESSIONS ******** //
session_start();
// ************ SESSIONS *********** //

if (!defined('LIVE')) DEFINE('LIVE', false);
// ************ CONSTANTS *********** //
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
define ('CONTACT_EMAIL', 'fabiano@procon.pb.gov.br');
define ('HTTP_SERVER', $protocol . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/.\\') . '/');
define ('BASE_URI', str_replace('\\', '/', realpath(dirname(__FILE__))) . '/');
define ('BASE_URL', HTTP_SERVER);
//define ('MYSQL', BASE_URI.'pages/model/mysql.php');

//echo 'Meu URL'.BASE_URL;//localhost e diretorio atual
//echo '<br>Meu URI'.BASE_URI.'<br><br>';//todo caminho do ao projeto"path"

// Esta função redireciona os usuários inválidos .
function redirect_user() {
	// Verifique se o item de sessão:
	if(!empty($_SESSION['user']) && $_SESSION['user'] == 'admin') {
		header("Location: ../system/admin/views/index.php");
		exit();
	} else if (!empty($_SESSION['user']) && $_SESSION['user'] == 'user'){
		header("Location: ../system/user/views/index.php");
		exit();
	}else if (!empty($_SESSION['user']) && $_SESSION['user'] == 'telmark'){
		header("Location: ../system/telemarketing/views/index.php");
		exit();
	}
} // Fim da função redirect_invalid_user().

// *************** FUNÇÃO DE RETORNA PAGINA CAMPO EM BRANCO ************** //
function redirect_page(){
		echo '<body onload="window.history.back();">';
		exit;
}
// ************ FIM FUNÇÃO DE RETORNA PAGINA CAMPO EM BRANCO ************ //

// ************ FUNÇÃO DE REDIRECIONAMENTO ************ //

// ************ GERENCIAMENTO DE ERROS ************ //
// Função para manipulação DE erros.
// Recebe cinco argumentos : número do erro, mensagem de erro (string) , o nome do arquivo onde o erro ocorreu (string)
// Número da linha onde ocorreu o erro , e as variáveis ​​que existiam.
// Retorna true .
function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars) {

	// Mensagem de erro :
	$message = "Ocorreu um erro no script '$e_file' na linha $e_line:\n$e_message\n";

	// Adicionar backtrace:
	$message .= "<pre>" .print_r(debug_backtrace(), 1) . "</pre>\n";

	if (!LIVE) { //Ixibir erro no browser.
            echo '<div class="alert alert-danger">' . nl2br($message) . '</div>';
	} else {
            error_log ($message, 1, CONTACT_EMAIL, 'From:fabiano@procon.pb.gov.br');
            //Só imprimir uma mensagem de erro no browser, se o erro não for um aviso
            if ($e_number != E_NOTICE) {
                echo '<div class="alert alert-danger">Ocorreu um erro de sistema. Pedimos desculpas pela inconveniência.</div>';
            }
	}
	return true;

}
//************ Usar error handler:********** //
set_error_handler('my_error_handler');
