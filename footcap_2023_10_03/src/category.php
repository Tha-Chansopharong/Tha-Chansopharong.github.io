<?php
include_once 'src/db_connect.php'; 

function categoryList() {
    $conn = connectDB();
   $sql = "SELECT *FROM tbl_category";
   $result = mysqli_query($conn, $sql);
   $rows = [];
   while($row = mysqli_fetch_assoc($result)) {
     $rows[] = $row;
   }
   return $rows;
}

function createCategory($title, $remark) {
    $conn = connectDB();
    $sql = "INSERT INTO tbl_category(title, remark) VALUES('" . $title . "', '" . $remark . "')";
    mysqli_query($conn, $sql);
}

?>