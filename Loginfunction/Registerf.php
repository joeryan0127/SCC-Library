<?php

include "../DB/connection.php";


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $user =$_POST['username'];
    $pass = $_POST['password'];
    $rpass = $_POST['Rpassword'];

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

        $statement=$conn->prepare("INSERT INTO tbl_account (a_name, a_user, a_pass, a_status)VALUE(:name, :user, :pass, :status)");
        $statement->bindValue(':name',$name);
        $statement->bindValue(':user',$user);
        $statement->bindValue(':pass',$hashedpwd);
        $statement->bindValue(':status','Active');
        $statement->execute();

        header("location:../Register.php?error=Createdsuccessfully");

    }


}







?>