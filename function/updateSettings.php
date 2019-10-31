<?php
session_start();
if ($_SESSION['role'] == 'admin'){
    if (isset($_POST['website_name'])){

        $bdd = [$_POST['website_name'], $_POST['logo'], $_POST['theme'], $_POST['signup_settings'], $_POST['sidebar_name'], $_POST['sidebar_image'], $_POST['sidebar_description'], $_POST['contact_email'], $_POST['about_name'], $_POST['about_image'], $_POST['about_text']];
        include_once 'database.php';
        $statement = $pdo->prepare('UPDATE settings SET website_name = ?, logo = ?, theme = ?, signup = ?, sidebar_name = ?, sidebar_image = ?, sidebar_description = ?, contact_email = ?, about_name = ?, about_image = ?, about_text = ? WHERE id = 1');
        $ask = $statement->execute($bdd);
        if ($ask){
            header('location:/admin.php?update_confirm=true');
        }else{
            header('location:/admin.php?error=true');
        }
    }else{
        header('location:/admin.php?error=true');
    }

}else{
    header('location:/?error=true');
}



