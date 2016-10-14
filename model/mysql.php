<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'pr0c0np3');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'nao_pertube');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$dbc){
    echo '<script>alert("Falha na conexao com o bando de dados!")</script>';
}else{
    $select = mysqli_select_db($dbc, DB_NAME);
      if(!$select){
         echo '<script>alert("Falha ao selecionar data base!")</script>';
         exit();
	   }
}
// FUNÇÃO ESCAPE
function escape_data ($data, $dbc) {
    if (get_magic_quotes_gpc()) $data = stripslashes($data);

   return mysql_real_escape_string ($dbc, trim ($data));
}
