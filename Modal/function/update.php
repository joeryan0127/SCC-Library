<?php
include "../../DB/connection.php";

if(isset($_POST['submit'])){
$ID=$_POST['id'];   

$daterecieved=$_POST['daterecieved'];
$class=$_POST['class'];
$author=$_POST['author'];
$tittle=$_POST['tittle'];
$isbn=$_POST['isbn'];
$edition=$_POST['edition'];
$volume=$_POST['volume'];
$pages=$_POST['page'];
$sourceoffund=$_POST['fund'];
$publisher=$_POST['publisher'];
$costprice=$_POST['price'];
$year=$_POST['year'];
$quantity=$_POST['quantity'];

$photo=$_FILES['Image']['name'];



if(!empty($photo)){
    move_uploaded_file($_FILES['Image']['tmp_name'], '../images/'.$photo);
    $filename = $photo;	

}
else{
    $statement=$conn->prepare("SELECT * FROM tbl_books Where b_id  = :id");
$statement->bindValue(':id', $ID);
$statement->execute();
while($books=$statement->fetch()){

    $filename =$books['b_image'];
  
}
}

$statement=$conn->prepare("UPDATE tbl_books SET b_daterecieved = :daterecieved, b_class= :class, b_author= :author, b_titleofbook = :tittle, b_image =:image, b_isbn = :isbn, b_edition = :edition, b_volumes = :volume, b_page = :page, b_sourceoffund = :sourceoffund, b_costprice = :costprice, b_publisher = :publisher, b_year= :year, b_quantity = :quantity WHERE b_id  = :id");

$statement->bindValue(':daterecieved',$daterecieved);
$statement->bindValue(':class',$class); 
$statement->bindValue(':author',$author);
$statement->bindValue(':tittle',$tittle);
$statement->bindValue(':image',$filename);
$statement->bindValue(':isbn',$isbn);
$statement->bindValue(':edition',$edition);
$statement->bindValue(':volume',$volume);
$statement->bindValue(':page',$pages);
$statement->bindValue(':sourceoffund',$sourceoffund);
$statement->bindValue(':costprice',$costprice);
$statement->bindValue(':publisher',$publisher);
$statement->bindValue(':year',$year);
$statement->bindValue(':quantity',$quantity);
$statement->bindValue(':id',$ID);
$statement->execute();

header("location:../../Books.php?error=UpdatedSuccessfully");

}



?>