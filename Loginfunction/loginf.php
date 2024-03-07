<?php
include "../DB/connection.php";


if(isset($_POST['submit'])){

$user =$_POST['username'];
$pass=$_POST['password'];

    $select=$conn->prepare("SELECT * FROM tbl_account WHERE a_user = :user AND a_status = 'Active'");
    $select->bindParam(':user', $user);
    $select->execute();
    $username = $select->fetch(PDO::FETCH_ASSOC);

    $uname = $username['a_user'];
    $password = $username['a_pass'];

    $checkpwd = password_verify($pass, $password );

    if($uname == $user && $checkpwd === true){

        session_start();

        $_SESSION['id']= $username["a_id"];
        $_SESSION['name']= $username["a_name"];
        $_SESSION['email']= $username["a_email"];
        $_SESSION['user']= $username["a_user"];
        $_SESSION['pass']= $username["a_pass"];
        $_SESSION['address']= $username["a_address"];
        $_SESSION['phone']= $username["a_phone"];

        header("location:../Dashboard.php?error=loginsuccessfully");

    }else{
        header("location:../login.php?error=Wrongcredential");


    }

} 


?>