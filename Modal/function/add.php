<?php
include "../../DB/connection.php";

if(isset($_POST['submit'])){

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


$filename = $_FILES['Image']['name'];

	if(!empty($filename)){
		move_uploaded_file($_FILES['Image']['tmp_name'], '../images/'.$filename);
		
	}


$statement=$conn->prepare("INSERT INTO tbl_books (b_daterecieved, b_class, b_author, b_titleofbook, b_image, b_isbn, b_edition, b_volumes, b_page, b_sourceoffund, b_costprice, b_publisher, b_year, b_quantity) VALUES (:daterecieved, :class,:author, :tittle, :image, :isbn, :edition, :volume, :page, :sourceoffund, :costprice, :publisher, :year, :quantity)");

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
$statement->execute();

header("location:../../Books.php?error=AddedbookSuccess");

}



?>