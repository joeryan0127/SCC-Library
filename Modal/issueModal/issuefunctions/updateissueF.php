<?php
include "../../../DB/connection.php";

if(isset($_POST['submit'])){

    $id=$_POST['id'];
    $s_id = $_POST['stud'];
    $b_id = $_POST['book'];
    $book_id = $_POST['book_id'];

if($book_id == $b_id){

    $statement=$conn->prepare("UPDATE tbl_issuebook SET s_id = :stud_id, book_id = :b_id Where i_id = :issue_id ");
    $statement->bindValue(':stud_id',$s_id);
    $statement->bindValue(':b_id',$b_id);
    $statement->bindValue(':issue_id',$id);
    $statement->execute();

    header("location:../../../issueBook.php?error=UpdateSuccess");

}else{

    $select=$conn->prepare("SELECT * FROM tbl_books WHERE b_id  = :b_id");
    $select->bindParam(':b_id', $b_id);
    $select->execute();
    $book = $select->fetch(PDO::FETCH_ASSOC);
   
    $quantity = $book['b_quantity']-1;

    $update=$conn->prepare("UPDATE tbl_books SET b_quantity = :quant WHERE b_id  = :b_id");
    $update->bindValue(':quant',$quantity);
    $update->bindValue(':b_id',$b_id);
    $update->execute();


    $statement=$conn->prepare("UPDATE tbl_issuebook SET s_id = :stud_id, book_id = :b_id Where i_id = :issue_id");
    $statement->bindValue(':stud_id',$s_id);
    $statement->bindValue(':b_id',$b_id);
    $statement->bindValue(':issue_id',$id);
    $statement->execute();

    header("location:../../../issueBook.php?error=UpdateSuccess");

}




}


?>