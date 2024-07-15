<?php 
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "ube_db";

$con = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name");

if (!$con) {
	die("Connection failed" . mysqli_connect_error());
}
?>