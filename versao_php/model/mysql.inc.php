<?php

define('DB_USER', 'root');
define('DB_PASSWORD', 'pr0c0np!@#');
define('DB_HOST', 'localhost');
define('DB_NAME', 'nao_pertube');

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$dbc) {
    echo '<script>alert("Falha na conexao com o bando de dados!")</script>';
    exit();
} else {
    $select = mysql_select_db(DB_NAME);
    if (!$select) {
        echo '<script>alert("Falha ao seleciona a tabela de dados!")</script>';
        exit();
    }
}
// FUNÇÃO ESCAPE
function escape_data($data, $dbc)
{
    if (get_magic_quotes_gpc()) {
        $data = stripslashes($data);
    }

    return mysql_real_escape_string($dbc, trim($data));
}
