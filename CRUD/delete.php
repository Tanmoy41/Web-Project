<?php
include '../Config/config.php';
$id = $_GET['id'];
$deleteQuery="DELETE FROM `info` WHERE id='$id'";

try {
   mysqli_query($conn,$deleteQuery);
   header("location:insert.php"); 
} catch (\Throwable $th) {
   echo $th;
}