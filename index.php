<?php

$uri = $_SERVER["REQUEST_URI"];
$uri = parse_url($uri, PHP_URL_PATH);

$base = "/escota/";

switch ($uri) {
    case $base:
        require "views/index.php";
        break;
    case $base . "about":
        require "views/about.php";
        break;
    case $base . "login":
        require "views/login.php";
        break;
    case $base . "login.php":
        require "views/script/login.php";
        break;
    case $base . "gallery":
        require "views/gallery.php";
        break;
    case $base . "contact":
        require "views/contact.php";
        break;
        // logout
    case $base . "logout":
        require "views/script/logout.php";
        break;
    default:
        require "views/404.php";
        break;
}
