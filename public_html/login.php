

<?php include './heder.php';?>
<?php include './topbar.php';?>
<style>
    .card{
         width: 450px;
    height: 500px;
    border: solid 2px;
    border-color: black;
    border-radius: 5px;
        margin: 100px 485px;
    }
    h2{
        font-family: sans-serif;
        font-weight: 300;
        text-align: center;
        
    }
    .btn{
        padding: 5px 15px;
        font-weight: 200;
        margin-right: 15px;
        
    }
</style>
<body style="background-image: url('assets/images/back.jpg'); height: ">
    
    <div class="card">
        <div>
        <h2>Login</h2>
        </div>
        <form method="post" autocomplete="off">
            <div style="padding: 22px;">
             <label for="usr" > User Name :</label>
             <input type="text" style=""  id="usr" name="usr">
             <label for="usr" style="margin-top: 16px;"> Password :</label>
             <input type="password" style=""  id="pass" name="pass">
            </div>
            <div style="padding: 0px 109px;">
                <!--<input type="submit" class="btn" name="sub" >-->
                <button type="submit"class="btn" >submit</button>
                     <button type="button"class="btn" >Cancel</button>
            </div>
        </form>
        
    </div>

     </body>
    <?php include 'admin/Db_connection.php';
    
    $username = $_POST['usr'];  
    $password = $_POST['pass'];  
     
      
        $sql = "select *from registration where Email = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script> alert('Login successful'); </script> ";  
        }  
        else{  
            echo "<script> alert(' Login failed. Invalid username or password.'); </script>";  
        }     
?>  
     
   
<?php include './footer.php';?>
   