<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect.php";



$id = $_GET['id'];

$sql = "DELETE FROM saved_recipes WHERE id=$id";


if (mysqli_query($con, $sql)){
	echo "Record deleted success";
} else {
	echo "Error deleting.";
}


mysqli_close($con);
header("Location: account.php");


?>