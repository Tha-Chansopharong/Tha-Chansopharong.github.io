<?php
include_once 'src/db_connect.php';
function categoryList(){
   $conn = connectDB();
   $sql = "SELECT *FROM tbl_category";
   $result = mysqli_query($conn , $sql);
   $rows = [];
  
   while( $row = mysqli_fetch_assoc($result)){
    $rows[] = $row;

   }
   return $row;
}


?>