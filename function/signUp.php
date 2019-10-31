<?php session_start();
$name = $_POST['signup_name'];
$surname = $_POST['signup_surname'];
$pseudo = $_POST['signup_pseudo'];
$sexe = $_POST['signup_sexe'];
$email = $_POST['signup_email'];
$password = password_hash($_POST['signup_password'], PASSWORD_BCRYPT);

$bdd = [$name, $surname, $pseudo, $sexe, $email, $password];
if ($_COOKIE['PHPSESSID'] == session_id()){

    include_once 'websiteInfo.php';
    include_once 'database.php';


    $statement = $pdo->prepare("INSERT INTO user (name, surname, pseudo, sexe, email, password) VALUES (?, ?, ?, ?, ?, ?);");

    $ask = $statement -> execute($bdd);
    $error= $statement ->errorInfo();
    var_dump($error);
    var_dump($statement);
    if ($error[1] == 1062){
        header('location:/?duplicate=true');
    }else{
        $content_mail = "Bonjour
\nVous venez de vous inscrire sur le blog de ".WEBSITE_NAME."
\nVos identifiants :
\n    > $pseudo
\nMerci";

        $headers = 'From: noreply@'.WEBSITE_NAME;

        mail($email, "INSCRIPTION",$content_mail, $headers);
        session_regenerate_id();
        header('location:/?validate_signup=true');

    }

}else{
    header('location:/?error=true');
}


