


 <?php include './header.php';?>

<?php
 include '../admin/Db_connection.php';
 $query="select * from image";
 $result= mysqli_query($con, $query);
?>
<style>
    
table, td, th {
  border: 1px solid;
  text-align: center;
}
th{
        padding: 12px;
        background-color: black;
        color: white
}
table {
  width: 100%;
  border-collapse: collapse;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
    
<div style="margin-left:20%;padding:1px 16px;height:1000px;">
    <div>
        <h2 style=" margin-top: 56px;">Add New Breed</h2> 
    </div>
    
    <div id="content">
        <form method="POST" action="" enctype="multipart/form-data">
                     
            <img id="output" src="../assets/images/download.png" style="border: 1px solid #000" width="150px"/>
<!--             <input type="file" onchange="preview()">-->
   
            <div class="form-group">
                <input  onchange="loadFile(event)" class="form-control" type="file" name="uploadfile" value="" />
            </div>
             
              <label for="fname">First name:</label>
               <input type="text" id="fname" name="breedname"><br><br>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
        
    </div>
    <div>
        
       <table>
  <tr>
    <th width="10%">ID</th>
    <th width="40%">Image</th>
     <th width="20%">Breed Name</th>
    <th width="20%" colspan="2">Action</th>
  </tr>
   <?php while ($row = mysqli_fetch_assoc($result)) : ?>
  <tr>
    <td><?php echo $row['Id']; ?></td>
    <td><img src="image/<?php echo $row['filename']; ?>" style="width: 15%;height: 15%;"></td>
    <td><?php echo $row['breedname']; ?></td>
    <td><i class="fa-solid fa-pen"></i> </td>
    <td><i class="fa-solid fa-trash"></i> </td>
  </tr>
   <?php endwhile; ?>
</table> 
        
        
         
        
                
<!--    <table>
        <tr>
            <th>Id </th>
            <th>Image</th>
            <th>Breed</th>
            <th>operation's</th>
        </tr>
  <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?php echo $row['Id']; ?><td>
            <td><img src="image/<?php echo $row['filename']; ?>" style="width: 15%;height: 15%;"><td>
            <td><?php echo $row['breedname']; ?></td>
            <td><i class="fa-solid fa-pen"></i> </td>
             <td><i class="fa-solid fa-trash"></i> </td>
          </tr>
   <?php endwhile; ?>

</table>-->

    </div>
</div>
<?php include './footer.php';?>
    
<?php
error_reporting(0);
 
$msg = "";
 

// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
     $breedName= $_POST['breedname'];
 
    $db = mysqli_connect("localhost", "root", "", "animals_point");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO image (`filename`,`breedname`) VALUES ('$filename','$breedName')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>