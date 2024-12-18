<?php
include '../Config/config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$descrip = $_POST['description'];
$price = $_POST['price'];

$productUpdateQuery ="UPDATE `info` SET `Name`='$name',`Description`='$descrip',`Price`='$price' WHERE id='$id'";

if(mysqli_query($conn,$productUpdateQuery)){
    echo "<script>alert('Data Updated!')</script>";
    echo "<script>location.href='insert.php'</script>";
}