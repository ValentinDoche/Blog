<? session_start();
if ($_SESSION['isConnected']){ ?>
    <!doctype html>
    <html lang="fr">
    <head>
        <title>VALENTIN DOCHE | BLOG </title>
        <?php
        require 'themes/default/head.php'
        ?>
    </head>
    <body>
    <?php
    require 'themes/default/header.php';
    require 'themes/default/admin.php';
    require 'themes/default/footer.php';
    ?>

    </body>
    </html>
<?php }else{
    header('location:/?error=true');
} ?>
