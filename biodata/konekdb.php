<?php 
header('Access-Contro,-Allow-Origin: *');

$db_name = "sekolah2";
$db_server = "localhost";
$db_user = "root";
$db_pass = "";

$_db = new PDO("mysql:host{$db_server};dbname={$db_name};charset=utf8", $db_user,$db_pass);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>