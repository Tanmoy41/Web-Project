<?php
include '../Config/config.php';
$name = $_POST['name'];
$descrip = $_POST['description'];
$price = $_POST['price'];


$productInsertQuery ="INSERT INTO `info`(`Name`, `Description`, `Price`) VALUES ('$name','$descrip','$price')";

if(mysqli_query($conn,$productInsertQuery)){
    echo "<script>alert('Data Inserted!')</script>";
    echo "<script>location.href='insert.php'</script>";
}