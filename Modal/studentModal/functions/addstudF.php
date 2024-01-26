<?php

include "../../../DB/connection.php";


if(isset($_POST['submit'])){

$fname =$_POST["fname"];
$lname =$_POST["lname"];
$address =$_POST["address"];
$email =$_POST["email"];
$gender =$_POST["gender"];
$department =$_POST["department"];
$yearlevel =$_POST["yearlevel"];
$birthdate =$_POST["birthdate"];
$status =$_POST["status"];
$schoolyear =$_POST["schoolyear"];


$statement=$conn->prepare("INSERT INTO tbl_students (firstname, lastname, s_address, email, gender, department, yearlevel, birthdate, status, schoolyear) VALUES (:fname, :lname, :address, :email,:gender, :department, :yearlevel, :birthdate, :status, :schoolyear)");

$statement->bindValue(':fname',$fname);
$statement->bindValue(':lname',$lname);
$statement->bindValue(':address',$address);
$statement->bindValue(':email',$email);
$statement->bindValue(':gender',$gender);
$statement->bindValue(':department',$department);
$statement->bindValue(':yearlevel',$yearlevel);
$statement->bindValue(':birthdate',$birthdate);
$statement->bindValue(':status',$status);
$statement->bindValue(':schoolyear',$schoolyear);
$statement->execute();

header("location:../../../students.php?error=AddedSuccess");

}




?>