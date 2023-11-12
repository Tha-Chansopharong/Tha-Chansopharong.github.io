<?php
include_once 'configs/db_connect.php';
class Category
{
  private $conn;

  function __construct()
  {
    $pdo = new DBConnect();
    $this->conn = $pdo->connect();
  }

  public function categoryList()
  {
    $sql = "SELECT *FROM tbl_category";
    $result = $this->conn->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
}
?>