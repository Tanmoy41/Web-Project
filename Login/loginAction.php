<?php
if(isset($_POST['login'])){
    include '../Config/config.php';
    $username = $_POST['l_username'];
    $password = $_POST['l_password'];

    $result = mysqli_query($conn,"SELECT * FROM `registration` WHERE Username='$username' AND Pass='$password'");

    if(mysqli_num_rows($result)>0){
        session_start();
        $_SESSION['l_username'] = $username;
        echo "<script>location.href='../Home/home.php'</script>"; 
    }
    else{
        echo "<script>alert('Invalid Username and Password!!')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}

?>