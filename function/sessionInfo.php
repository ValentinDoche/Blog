<?php
$_SESSION['name'] = $result['name'];
$_SESSION['surname'] = $result['surname'];
$_SESSION['pseudo'] = $result['pseudo'];
$_SESSION['sexe'] = $result['sexe'];
$_SESSION['email'] = $result['email'];
$_SESSION['role'] = $result['role'];

header('location:/?error=true');