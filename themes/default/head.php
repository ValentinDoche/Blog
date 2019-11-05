<?php session_start(); session_regenerate_id(); ?>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="/assets/css/materialize.css">
<link rel="stylesheet" href="/assets/css/main.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="/assets/css/prism.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
<script>
    $(document).ready(function(){
        <?php
            if (isset($_GET['duplicate']) && $_GET['duplicate'] ){
                echo "M.toast({html: 'ERREUR E-MAIL OU PSEUDO DEJA UTILISÉ', classes: 'rounded red-text', displayLength: 10000});";
            }elseif (isset($_GET['validate_signup']) && $_GET['validate_signup']){
                echo "M.toast({html: 'INSCRIPTION REUSSITE VOUS POUVEZ VOUS CONNECTER', classes: 'rounded green-text', displayLength: 10000});";
            }elseif (isset($_GET['error']) && $_GET['error']){
                echo "M.toast({html: 'OUPS !! UNE ERREUR EST SURVENUE', classes: 'rounded red-text', displayLength: 10000});";
            }elseif (isset($_GET['invalide_signin']) && $_GET['invalide_signin']){
                echo "M.toast({html: 'PSEUDO OU MDP INVALIDE', classes: 'rounded red-text', displayLength: 10000});";
            }elseif (isset($_GET['valide_signin']) && $_GET['valide_signin']){
                echo "M.toast({html: 'CONNEXION REUSSITE', classes: 'rounded green-text', displayLength: 10000});";
            }elseif (isset($_GET['signout']) && $_GET['signout']){
                echo "M.toast({html: 'DECONNEXION', classes: 'rounded red-text', displayLength: 10000});";
            }elseif (isset($_GET['update_confirm']) && $_GET['update_confirm']){
                echo "M.toast({html: 'WEBSITE SETTINGS UPDATED', classes: 'rounded green-text', displayLength: 10000});";
            }elseif (isset($_GET['article_add']) && $_GET['article_add']){
                echo "M.toast({html: 'ARTICLE HAS BEEN ADD', classes: 'rounded green-text', displayLength: 10000});";
            }
        ?>
    });
</script>
