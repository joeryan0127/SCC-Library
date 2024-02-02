<?php

include "../DB/connection.php";


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $user =$_POST['user'];
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];
    $address = $_POST['address'];

    $select=$conn->prepare("SELECT a_user FROM tbl_account WHERE a_user = :user");
    $select->bindParam(':user', $user);
    $select->execute();
    $username = $select->fetch(PDO::FETCH_ASSOC);

    $uname = $username['a_user'];

    if($uname == $user){
        header("location:../Register.php?error=Usernametaken");
    }else if($pass != $rpass){

        header("location:../Register.php?error=Mismatch");

    }else{

        

        $hashedpwd = password_hash($pass, PASSWORD_DEFAULT);

        $statement=$conn->prepare("INSERT INTO tbl_account (a_name, a_email, a_user, a_pass, a_address, a_status)VALUE(:name, :email, :user, :pass, :address, :status)");
        $statement->bindValue(':name',$name);
        $statement->bindValue(':email',$email);
        $statement->bindValue(':user',$user);
        $statement->bindValue(':pass',$hashedpwd);
        $statement->bindValue(':address',$address);
        $statement->bindValue(':status','Active');
        $statement->execute();

        header("location:../Register.php?error=Createdsuccessfully");

    }


}







?>