<?php 

include "connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id=$id";

if (mysqli_query($con, $sql)){
	echo "Record deleted success";
} else {
	echo "Error deleting.";
}


mysqli_close($con);
header("Location: admin.php");


?>