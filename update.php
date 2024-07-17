<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
    $editEmail = $_POST['editEmail'];

    $sql = "UPDATE users SET username = '$editUsername', email = '$editEmail', password = '$editPassword' WHERE id=$id";

    if (mysqli_query($con, $sql)){
        echo "<script language='javascript' type='text/javascript'> alert('Record Successfully'); </script>";
        header("Location: account.php");
    } else {
        echo "<script language='javascript' type='text/javascript'> alert('Something went wrong'); </script>";
    }

    mysqli_close($con);
}  


?>