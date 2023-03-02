<!DOCTYPE html>


<?php include './header.php';?>

<?php
 include '../admin/Db_connection.php';
 $query="select * from registration";
 $counter = 0;
 $result= mysqli_query($con, $query);
?>
<style>
    
table, td, th {
  border: 1px solid;
  text-align: center;
}
th{
        padding: 12px;
        background-color: #5f5e5e;
        color: white
}
table {
  width: 100%;
  border-collapse: collapse;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>


    <table style="width:100%; margin-inline-start: 20%;">
  <tr>
    <th>Id</th>
    <th>Name</th> 
    <th>Contact</th> 
    <th>Email</th>
    <th>Gender</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php while ($row = mysqli_fetch_assoc($result)) : ?>
  <tr>
      <td><?php echo ++$counter; ?></td>
            <td><?php echo $row['Fname']; ?> <?php echo $row['Lname']; ?></td>
             <td><?php echo $row['Contact']; ?></td>
            <td><?php echo $row['Email']; ?></td>
             <td><?php echo ($row['gender']=='0')?'Female':'' ?><?php echo ($row['gender']=='1')?'Male':'' ?><?php echo ($row['gender']=='2')?'Other':'' ?></td>
             <td><a href="../signupdate.php?id=<?php echo $row['ID']; ?>"> <i class="fa-solid fa-pen" style="color: black"></i></a> </td>
             <td><a href="../admin/delete.php?id=<?php echo $row['ID']; ?>"><i  class="fa-solid fa-trash"></i></a> </td>
 
  </tr>
   <?php endwhile; ?>
  

</table>



<?php include './footer.php';?>