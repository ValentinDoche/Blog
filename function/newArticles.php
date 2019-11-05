<?php
session_start();
include_once "database.php";

$randname = rand(0, 99999999999999999);
$file_accepted = ["image/png", "image/jpeg"];
$path = "../upload/";
$name = $randname."-".$_FILES['articles_image_upload']['name'];
$path .= $name;

$bdd = [$_POST["articles_title"], $name, $_POST["articles_summary"],$_POST["articles_content"], "hello1", "hello2", date("d-m-Y")];

$statement = $pdo->prepare("INSERT INTO articles (title, image, summary, tag1, tag2, content, date) VALUES (?, ?, ?, ?, ?, ?, ?);");


if (in_array($_FILES['articles_image_upload']['type'], $file_accepted)){
    if ($_FILES['articles_image_upload']['size'] < 2097152 ){
        move_uploaded_file($_FILES['articles_image_upload']['tmp_name'], $path);
        $ask = $statement -> execute($bdd);
        if ($ask){
            header("location:/admin.php?article_add=true");
        }else{
            header("location:/admin.php?error=true");

        }
    }else{
        header("location:/admin.php?error=true");
    }
}else{
    header("location:/admin.php?error=true");
}

