<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title><?php echo TITLE;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content=<?php echo KEY_WORDS;?> />
    <meta name="author" content="">
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oleo+Script:400,700">
    <link rel="stylesheet" href="<?php echo $PATH_CSS_BOOTSTRAP;?>">
    <link rel="stylesheet" href="<?php echo $PATH_CSS_STYLE;?>">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>        <![endif]-->
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="logo span4"> <img src="<?php echo $PATH_IMG_LOGO;?>" alt="" height="" width="250"> </div>
                <div class="links span8">
                    <div class='user'>Bem vindo <?php if(!empty($_SESSION['username'])) echo $_SESSION['username']; else echo 'Visitante'; ?></div>
                    <?php
                        if (empty($_SESSION['user_id'])) {
                            echo"<form class='form-inline'  action= '$PATH_LINK_LOGIN'; method='post'>";
                                        echo"<label for='email'>Email</label>";
                                            echo"<input id='email' name='email' placeholder='usuario@dominio.com' type='email'>";
                                        echo"<label for='senha'>Senha</label>";
                                            echo"<input id='pwd' name='pwd' type='password' >";
                                        echo"<button type='submit'>Logar</button>";
                                    echo"</form>";
                            } else {
                                echo"<a href='$PATH_LINK_LOGOUT'>Sair</a>";
                            }
                    ?>

                </div>
            </div>
        </div>
    </div>
