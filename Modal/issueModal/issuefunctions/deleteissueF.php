<?php

include "../../../DB/connection.php";

if(isset($_POST['Delete'])){

    $id=$_POST['id'];
    $b_id=$_POST['book'];
    $status=$_POST['status'];

    if($status != 'RETURNED'){

        $select=$conn->prepare("SELECT * FROM tbl_books WHERE b_isbn = :b_id");
        $select->bindParam(':b_id',$b_id);
        $select->execute();
        $book = $select->fetch(PDO::FETCH_ASSOC);
    
        $quantity = $book['b_quantity']+1;
    
        $update=$conn->prepare("UPDATE tbl_books SET b_quantity = :quant WHERE b_isbn = :b_id");
        $update->bindValue(':quant',$quantity);
        $update->bindValue(':b_id',$b_id);
        $update->execute();
    
    
    
        $statement=$conn->prepare("UPDATE tbl_issuebook SET i_status=:status WHERE i_id = :id");
        $statement->bindValue(':id',$id);
        $statement->bindValue(':status',"RETURNED");
        $statement->execute();
    
    
    
        header("location:../../../issueBook.php?error=Returned");
    }else{

        header("location:../../../issueBook.php?error=AlreadyReturned");
    }

  
}


?>