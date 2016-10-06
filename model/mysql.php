<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'pr0c0np!@#');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'nao_pertube');


$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);


if (!$dbc){
    echo '<script>alert("Falha na conexao com o bando de dados!")</script>';
}else{
    echo '<script>alert("Conexao com o bando de dados!")</script>';
    $select = mysqli_select_db(DB_NAME);

        if(!$select){
            echo '<script>alert("Falha ao selecionar data base!")</script>';
            exit();
	      } else {
             echo '<script>alert("Selecionol data base!")</script>';
         }
}
// FUNÇÃO ESCAPE
function escape_data ($data, $dbc) {
    if (get_magic_quotes_gpc()) $data = stripslashes($data);

   return mysql_real_escape_string ($dbc, trim ($data));
}
echo '<script>alert("Aquivo conexao!")</script>';
