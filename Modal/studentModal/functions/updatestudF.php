<?php

include "../../../DB/connection.php";

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $yearlevel = $_POST['yearlevel'];
    $birthdate = $_POST['birthdate'];
    $status = $_POST['status'];
    $schoolyear = $_POST['schoolyear'];


    $statement = $conn->prepare("UPDATE tbl_students SET firstname=:fname, lastname=:lname, s_address=:address, email= :email, gender=:gender, department=:department, yearlevel=:yearlevel, birthdate=:birthdate, status=:status, schoolyear=:schoolyear WHERE s_id = :id");

    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':department', $department);
    $statement->bindValue(':yearlevel', $yearlevel);
    $statement->bindValue(':birthdate', $birthdate);
    $statement->bindValue(':status', $status);
    $statement->bindValue(':schoolyear', $schoolyear);
    $statement->bindValue(':id', $id);
 
    $statement->execute();

    header("location:../../../students.php?error=UpdateSuccess");

}


?>