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
      $item7 = mysqli_real_escape_string($connect, utf8_encode($data[6]));
      $item8 = mysqli_real_escape_string($connect, utf8_encode($data[7]));
      $item9 = mysqli_real_escape_string($connect, utf8_encode($data[8]));
      $item10 = mysqli_real_escape_string($connect, utf8_encode($data[9]));
      $item11 = mysqli_real_escape_string($connect, utf8_encode($data[10]));
      $item12 = mysqli_real_escape_string($connect, utf8_encode($data[11]));
      $item13 = mysqli_real_escape_string($connect, utf8_encode($data[12]));
      $item14 = mysqli_real_escape_string($connect, utf8_encode("sample.png"));
      $item15 = mysqli_real_escape_string($connect, utf8_encode(5));
      $item16 = mysqli_real_escape_string($connect, utf8_encode(" "));

  
  
      // $special = htmlspecialchars($item1, ENT_QUOTES, 'UTF-8');

//       $query = "INSERT into tbl_items (name, quantity, unit, price, discount) 
//       values('$item1','$item2','$item3','$item4','$item5')";

// INSERT INTO tableName (id, name, age) 
// VALUES(10, "Roy", 34) 
// ON DUPLICATE KEY 
// UPDATE    
// name="Roy", age=34 



$query = "INSERT INTO tbl_books (b_daterecieved, b_class, b_author, b_titleofbook, b_image, b_isbn, b_edition, b_volumes, b_page, b_sourceoffund, b_costprice, b_publisher, b_year, b_quantity, b_section, b_remark) 
VALUES ('$item1','$item2','$item3','$item4','$item14','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item15','$item16','$item13') ";


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