<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 include '../admin/Db_connection.php';
 $id=$_GET['id'];
 $query="DELETE FROM registration WHERE ID = $id";
 $result1= mysqli_query($con, $query);
// $row = mysqli_fetch_assoc($result);
 if ($con->query($query) === TRUE) {
  echo "<script> alert('Record Added successfully')</script>";
  header("location:register.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$con->close();
?>
}