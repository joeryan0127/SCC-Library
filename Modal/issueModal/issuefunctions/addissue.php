<?php

include "../../../DB/connection.php";

if(isset($_POST['submit'])){

    $studentID = $_POST['stud'];
    $bookID = $_POST['book'];

    date_default_timezone_set('Asia/Manila');
    $currentDateTime = date("Y-m-d H:i:s");

    $select=$conn->prepare("SELECT * FROM tbl_books WHERE b_id = :b_id");
    $select->bindParam(':b_id', $bookID);
    $select->execute();
    $book = $select->fetch(PDO::FETCH_ASSOC);
   
    $b_quant = $book['b_quantity'];

    if($b_quant != 0){

        $quantity = $book['b_quantity']-1;

        $update=$conn->prepare("UPDATE tbl_books SET b_quantity = :quant WHERE b_id = :b_id");
        $update->bindValue(':quant',$quantity);
        $update->bindValue(':b_id',$bookID);
        $update->execute();
    
        $statement=$conn->prepare("INSERT INTO tbl_issuebook (s_id, book_id, i_date, i_status) VALUES (:s_id, :b_id, :date, :status)");
    
        $statement->bindValue(':s_id',$studentID);
        $statement->bindValue(':b_id',$bookID);
        $statement->bindValue(':date',$currentDateTime);
        $statement->bindValue(':status','Borrowed');
        $statement->execute();
    
    
        
    
        header("location:../../../issueBook.php?error=AddedSuccess");


    }else{

        
        header("location:../../../issueBook.php?error=Nostock");

    }

   

}

?>