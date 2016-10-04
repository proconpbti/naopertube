<?php
error_reporting(E_ALL);
include ('../config.php');
require('../model/mysql.php');

// ----- pegar campo post do login
if($_REQUEST["action"] == "login"){

    if (!empty($_POST['mail']) && !empty($_POST['pwd'])) {
        $_email = $_POST['mail'];
        $_pwd = $_POST['pwd'];

        $q = "SELECT id, username, type, password , date_expires FROM lc_user WHERE email='$_email'";
        $r = mysql_query($q);

	if(mysql_num_rows($r) === 1) {

		$row = mysql_fetch_array($r);
                if(!$row){
                    echo "sem row";
                }
		if ($_pwd == $row['password']) {
                        //session_start();
			if ($row['type'] === 'admin') {
				session_regenerate_id(true);
				$_SESSION['user_admin'] = 'administrador';
                        } else {
                            $_SESSION['user_admin'] = 'moderador';
                        }

			$_SESSION['user_id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
                        //$USER = $row['username'];
			// Indica se a conta do usuário não expirou:
			if ($row['date_expires'] === 1) $_SESSION['user_not_expires'] = true;

                        if($_SESSION['user_admin'] === 'administrador'){
                            header("Location: ../../admin/index.php");
                        }   else{
                            header("Location: ../../index.php");
                        }
		} else { // Endereço de e-mail direito, senha inválida.
			$login_errors['login'] = 'O endereço de e-mail e senha não coincidem.';

                        header("Location: ../login.php");
                }
	} else {
            header("Location: ../login.php");
        }

    } else {
       // header("Location: ../view/login.php");

}

} else {
    session_destroy();
    header("location: ../index.php");
    exit;
}
