<?php

include "../DB/connection.php";

if(isset($_POST['submit'])){

    $id=$_POST['id'];
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $statement=$conn->prepare("UPDATE tbl_account SET a_name=:name, a_address=:address, a_phone=:phone, a_email=:email WHERE a_id = :id");

    $statement->bindValue(':id',$id);
    $statement->bindValue(':name',$fullname);
    $statement->bindValue(':address',$address);
    $statement->bindValue(':phone',$phone);
    $statement->bindValue(':email',$email);
   
    $statement->execute();

    $select=$conn->prepare("SELECT * FROM tbl_account WHERE a_id = :id");
    $select->bindParam(':id', $id);
    $select->execute();
    $username = $select->fetch(PDO::FETCH_ASSOC);

    session_start();

    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["user"]);
    unset($_SESSION["pass"]);
    unset($_SESSION["address"]);
    unset($_SESSION["phone"]);

    
    $_SESSION['id']= $username["a_id"];
    $_SESSION['name']= $username["a_name"];
    $_SESSION['email']= $username["a_email"];
    $_SESSION['user']= $username["a_user"];
    $_SESSION['pass']= $username["a_pass"];
    $_SESSION['address']= $username["a_address"];
    $_SESSION['phone']= $username["a_phone"];



    header("location:../users-profile.php?error=UpdatedSuccessfully");

}


?>