<?php
    include '../Config/config.php';
    $fullname = $_POST['r_fullname'];
    $username = $_POST['r_username'];
    $email = $_POST["r_email"];
    $password = $_POST["r_password"];
    $con_password = $_POST["r_con_password"];
    $mobile = $_POST["r_mobile"];


    $_mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $_email_pattern = "/(cse|eee)_\d{10}@lus\.ac\.bd/";

    $insert_query ="INSERT INTO `registration`(`Full Name`, `Username`, `Email`, `Pass`, `Phone`) VALUES ('$fullname', '$username','$email', '$password', '$mobile')";
    $duplicate_username = mysqli_query($conn,"SELECT * FROM `registration` WHERE Username='$username'");
    $duplicate_email = mysqli_query($conn,"SELECT * FROM `registration` WHERE Email='$email'");

    if(strlen($username)<3 || strlen($username)>20){
        echo "<script>alert('User Name should be 3-20 char!!!!')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(!preg_match($_email_pattern,$email)){
        echo "<script>alert('Invalid Email!!')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(!preg_match($_mobile_pattern,$mobile)){
        echo "<script>alert('Invalid Mobile Number!!')</script>";
        echo "<script>location.href='registration.php'</script>";
    }

    else if($password !== $con_password){
        echo "<script>alert('Pass and con-pass is not matching!!')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(mysqli_num_rows($duplicate_username)>0){
        echo "<script>alert('username already taken!!')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(mysqli_num_rows($duplicate_email)>0){
        echo "<script>alert('email already taken!!')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else{
        if(!mysqli_query($conn,$insert_query)){
            die("not inserted!!");
        }
        else{
            echo "<script>alert('Inserted!!')</script>";
            echo "<script>location.href='../Login/login.php'</script>";
        }  
    }