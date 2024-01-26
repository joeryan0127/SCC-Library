<?php

include "../../../DB/connection.php";

if(isset($_POST['Delete'])){

$id = $_POST['id'];

$statement=$conn->prepare('UPDATE tbl_students SET s_status =:s_status WHERE s_id =:id ');
$statement->bindValue(':s_status','Deleted');
$statement->bindValue(':id',$id);
$statement->execute();

header("location:../../../students.php?error=DeletedSuccessfully");

}



?>