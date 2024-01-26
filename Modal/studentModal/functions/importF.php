<?php


include "../../../DB/connection.php";


$connect = mysqli_connect("localhost", "root", "", "library");


if(isset($_POST["upload"])){


if ($_FILES['file']['name'] == "")
{
header('Location:../../../students.php?error=Nofile');
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
      $item11 = mysqli_real_escape_string($connect, utf8_encode('Active'));
  
    //   $special = htmlspecialchars($item1, ENT_QUOTES, 'UTF-8');

//       $query = "INSERT into tbl_items (name, quantity, unit, price, discount) 
//       values('$item1','$item2','$item3','$item4','$item5')";

// INSERT INTO tableName (id, name, age) 
// VALUES(10, "Roy", 34) 
// ON DUPLICATE KEY 
// UPDATE    
// name="Roy", age=34 



$query = "INSERT INTO tbl_students (firstname,lastname,s_address, email, gender, department, yearlevel, birthdate, status, schoolyear, s_status) 
VALUES ('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11') 
ON DUPLICATE KEY  UPDATE firstname='$item1', lastname='$item2',s_address='$item3', email='$item4', gender='$item5',department='$item6',yearlevel='$item7',birthdate ='$item8',status='$item9',schoolyear='$item10', s_status = '$item11'";

      mysqli_query($connect, $query);


      
}


}

fclose($handle);
header("location:../../../students.php?error=Uploaded");
     exit;

  

}
}

}





?>