<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("form not connect due to".mysqli_connection_error());
    }

    $name = $_POST['name'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $plain_password = $_POST['password'];
    $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `form`.`login_table`(`Name`, `Mobile No.`, `Email`, `Password`) VALUES ( '$name', '$mob', '$email', '$hashed_password')";
    if($con->query($sql) === True){
         echo "<script>alert('Form successfully Submited');</script>";
    }
    $con -> close();
    }
?>
