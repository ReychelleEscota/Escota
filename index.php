<?php

$uri = $_SERVER["REQUEST_URI"];

$base = "/escota/";

switch ($uri) {
    case $base:
        require "views/index.php";
        break;
    case $base . "about":
        require "views/about.php";
        break;
    case $base . "works":
        require "views/works.php";
        break;
    case $base . "contact":
        require "views/contact.php";
        break;
    default:
        require "views/404.php";
        break;
}
