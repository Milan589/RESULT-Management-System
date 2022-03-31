<?php
include 'config.php';
$id = $_GET['id'];
//connect to database


//query to delete record from tbl_category with id
$sql = "delete from exam where exam_id = $id";
//execute query
mysqli_query($conn, $sql);

//redirect to listing page
header('location:examdetail.php');
?>