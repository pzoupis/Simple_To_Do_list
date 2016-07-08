<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=to_do_list;host=localhost', 'root', '');

if(!isset($_SESSION['user_id'])){
	die('You are not signed in.');
}
?>