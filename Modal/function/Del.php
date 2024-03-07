<?php

include "../../DB/connection.php";

    
if(isset($_POST["Delete"])){
    $id=$_POST["id"];
    
    $statement=$conn->prepare("UPDATE tbl_books SET b_status=:b_status WHERE b_id = :id");
    $statement->bindValue(':b_status','Deleted');
    $statement->bindValue(':id',$id);
    $statement->execute();
    
    header("location:../../Books.php?error=Deleted");
    }
    
    ?>

