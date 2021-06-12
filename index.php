<?php
error_reporting(1);
session_start();
// "admin/koneksi.php";
//require "sistem/set_login.php";

    $page=$_GET[page];
    if(file_exists("view/$page.php")) require "view/$page.php";
    else require "view/home.php";
?>


