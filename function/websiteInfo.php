<?php
include_once 'database.php';

$sth = $pdo->query("SELECT * FROM settings where id = 1");

$website_result = $sth->fetch();

define('WEBSITE_NAME', $website_result['website_name']);
define('LOGO', $website_result['logo']);
define('THEME', $website_result['theme']);
define('SIGNUP', $website_result['signup']);
define('SIDEBAR_IMAGE', $website_result['sidebar_image']);
define('SIDEBAR_NAME', $website_result['sidebar_name']);
define('SIDEBAR_DESCRIPTION', $website_result['sidebar_description']);
define('CONTACT_EMAIL', $website_result['contact_email']);
define('ABOUT_NAME', $website_result['about_name']);
define('ABOUT_IMAGE', $website_result['about_image']);
define('ABOUT_TEXT', $website_result['about_text']);

header('location:/?error=true');
