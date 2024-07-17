<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$id = $_POST['id'];
	$username = $_POST['editUsername'];
	$email = $_POST['editEmail'];
	$password = $_POST['editPassword'];
	$user_level = $_POST['editUserlevel'];

	$sql = "UPDATE users SET username = '$username', email = '$email', password = '$password', user_level = '$user_level' WHERE id=$id";

	if(mysqli_query($con, $sql)){
		echo "<script language='javascript' type='text/javascript'> alert('Updated Successfully'); </script>";
        header("Location: admin.php");
	} else {
		echo "<script language='javascript' type='text/javascript'> alert('Something went wrong'); </script>";
	}

	mysqli_close($con);
}

?>