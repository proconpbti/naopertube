<?php

include_once '../config.php';
require '../model/mysql.php';

// ----- pegar campo post do login
if ($_REQUEST['action'] == 'login') {
    if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
        $_email = $_POST['email'];
        $_pwd = $_POST['pwd'];

        $q = "SELECT id, username, type, password FROM np_user WHERE email='$_email'";
        $r = mysqli_query($dbc, $q);
        if (!$r) {
            printf("Error: %s\n", mysqli_error($dbc));
        }
        if (mysqli_num_rows($r) === 1) {
            $row = mysqli_fetch_array($r);
            if ($_pwd == $row['password']) {
                session_regenerate_id(true);

                $_SESSION['user'] = $row['type'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_id'] = $row['id'];

                redirect_user();
            } else { // Endereço de e-mail direito, senha inválida.
                        $login_errors['login'] = 'O endereço de e-mail e senha não coincidem.';
                echo '<script>alert("retornou index senha incorreta!")</script>';
                        //header("Location: ../index.php");
            }
        } else {
            echo '<script>alert("retornou index email incorreto!")</script>';
                    //header("Location: ../index.php");
        }
    } else {
        echo '<script>alert("retornou index campo em branco!")</script>';
      //header("Location: ../index.php");
    }
} else {
    session_destroy();
    header('location: ../index.php');
    exit;
}
