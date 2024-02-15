<?php
include "../../DB/connection.php";

if(isset($_POST['submit'])){

$Book_name=$_POST['bname'];
$Description=$_POST['Description'];
$publish=$_POST['Publish'];

$filename = $_FILES['image']['name'];

	if(!empty($filename)){
		move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);
		
	}


$statement=$conn->prepare("INSERT INTO tbl_books (b_image,b_name,b_description,b_publish) VALUES (:image, :name,:Description, :publish)");

$statement->bindValue(':image',$filename);
$statement->bindValue(':name',$Book_name); 
$statement->bindValue(':Description',$Description);
$statement->bindValue(':publish',$publish);
$statement->execute();

header("location:../../Books.php?error=AddedbookSuccess");

}



?>