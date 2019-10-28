<?php
$page = $_GET['page'];
switch ($page){
    case 'profile':
        header('location:/admin.php#profile');
        break;
    case 'articles':
        header('location:/admin.php#article');
        break;
    case 'user':
        header('location:/admin.php#user');
        break;
    case 'setting':
        header('location:/admin.php#setting');
        break;
    default:
        header('location:/?error=true');
        break;
}
