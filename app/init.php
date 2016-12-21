<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=php_to_do_list;host=localhost', 'root', 'passwordRoot', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$db->exec("SET CHARACTER SET 'utf8'"); 
if(!isset($_SESSION['user_id'])){
	die('You are not signed in.');
}
?>