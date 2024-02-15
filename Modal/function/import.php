<?php


include "../../DB/connection.php";


$connect = mysqli_connect("localhost", "root", "", "library");


if(isset($_POST["upload"])){


if ($_FILES['file']['name'] == "")
{
header('Location:../../Books.php?error=Nofile');
exit();
}else {

if($_FILES['file']['name'])
{
$filename = explode(".", $_FILES['file']['name']);
if($filename[1] == 'csv'){

    $handle = fopen($_FILES['file']['tmp_name'], "r");
 

   

    while($data = fgetcsv($handle))//handling csv file 
    
    {
      $item1 = mysqli_real_escape_string($connect, utf8_encode($data[0]));
      $item2 = mysqli_real_escape_string($connect, utf8_encode($data[1]));
      $item3 = mysqli_real_escape_string($connect, utf8_encode($data[2]));
      $item4 = mysqli_real_escape_string($connect, utf8_encode($data[3]));
      $item5 = mysqli_real_escape_string($connect, utf8_encode($data[4]));
      $item6 = mysqli_real_escape_string($connect, utf8_encode($data[5]));
  
  
      // $special = htmlspecialchars($item1, ENT_QUOTES, 'UTF-8');

//       $query = "INSERT into tbl_items (name, quantity, unit, price, discount) 
//       values('$item1','$item2','$item3','$item4','$item5')";

// INSERT INTO tableName (id, name, age) 
// VALUES(10, "Roy", 34) 
// ON DUPLICATE KEY 
// UPDATE    
// name="Roy", age=34 



$query = "INSERT INTO tbl_books (b_image,b_name,b_description, b_publish, b_quantity, b_author) 
VALUES ('$item1','$item2','$item3','$item4','$item5','$item6') ";


      mysqli_query($connect, $query);


      
}


}

fclose($handle);
header("location:../../Books.php?error=Uploaded");
     exit;

  

}
}

}





?>