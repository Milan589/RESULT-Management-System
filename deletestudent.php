<?php
session_start();
if(isset($_SESSION['teacher_id'])){
include 'config.php';
$id = $_GET['id'];
//query to delete record from tbl_category with id
$sql = "delete from student where student_id = $id";
//execute query
mysqli_query($conn, $sql);

//redirect to listing page
header('location:studentinfo.php');
}else{
  header('location:login.php');

}
?>