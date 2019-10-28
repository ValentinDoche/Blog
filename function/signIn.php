<?php session_start();
$pseudo = $_POST['signin_pseudo'];
$password = $_POST['signin_password'];
$bdd = [$pseudo];
if (isset($_POST['signin_pseudo'])){

    include_once 'database.php';

    $statement = $pdo->prepare("SELECT * FROM user WHERE pseudo=?");
    $ask = $statement->execute($bdd);
    $result = $statement->fetch();
    $mdp = password_verify($password, $result['password']);
    if (password_verify($password, $result['password'])){
        $_SESSION['isConnected'] = true;
        include 'sessionInfo.php';
        header('location:/?valide_signin=true');
    }else{
        header('location:/?invalide_signin=true');
    }
}else{
    header('location:/?error=true');
}



