<?php
include "../../DB/connection.php";

if(isset($_POST['submit'])){
$ID=$_POST['id'];   

$Book_name=$_POST['name'];
$Description=$_POST['Description'];
$publish=$_POST['Publish'];

$photo=$_FILES['Image']['name'];



if(!empty($photo)){
    move_uploaded_file($_FILES['Image']['tmp_name'], '../images/'.$photo);
    $filename = $photo;	

}
else{
    $statement=$conn->prepare("SELECT * FROM tbl_books Where b_isbn = :id");
$statement->bindValue(':id', $ID);
$statement->execute();
while($books=$statement->fetch()){

    $filename =$books['b_image'];
  
}
}

$statement=$conn->prepare("UPDATE tbl_books SET b_image=:image, b_name=:name,b_description=:Description,b_publish=:publish WHERE b_isbn = :id");

$statement->bindValue(':image',$filename);
$statement->bindValue(':name',$Book_name);
$statement->bindValue(':Description',$Description);
$statement->bindValue(':publish',$publish);
$statement->bindValue(':id',$ID);
$statement->execute();

header("location:../../Books.php?error=UpdatedSuccessfully");

}



?>