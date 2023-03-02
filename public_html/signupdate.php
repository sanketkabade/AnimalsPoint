 
 
<?php
 include '../public_html/admin/Db_connection.php';
 $id=$_GET['id'];
 $query="select * from registration where ID=$id";
 $result= mysqli_query($con, $query);
 $row = mysqli_fetch_assoc($result);
?>
<?php include './heder.php';?>
<?php include './topbar.php';?>
<style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>



    
    
<?php
if(isset($_POST['register']))
{
    $id=$_GET['id'];
  $firstName= $_POST['fname'];
  $lastName= $_POST['lname'];
  $fatherName= $_POST['faname'];
  $contact= $_POST['contact'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $gender= $_POST['gender'];
  $addresh= $_POST['address'];
  $state= $_POST['state'];
   $city= $_POST['city'];
  $pincode= $_POST['pincode'];
 $query="UPDATE registration SET Fname = '$firstName', Lname = '$lastName',Faname= '$fatherName',Contact = '$contact', "
         . "Email = '$email', gender = '$gender', Password = '$password', Addresh = '$addresh', State = '$state', city = '$city', Pincode = '$pincode' where ID = '$id'";
 $result= mysqli_query($con, $query);
   if($result == 1){
     // location.reload();
     ?>  
<script>alert('Record Update Successfull')</script>
   <script type="text/javascript">
window.location.href = '../public_html/admin/register.php';
</script>
    <?php
   }
} 
?>

    

<body style="background-image: url('assets/images/back.jpg'); height: ">
    
     <section class="h-100 ">
         <form  method="post" onsubmit="validate()" name="registraction">
  <div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col" style="border-radius: 16px;">
          <!--<div class="card card-registration my-4" style="box-shadow: -19px -20px 10px #3b3b3b;">-->
          <div class="card card-registration my-4" >
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
                <img src="assets/images/sign2.png"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; margin-top: 25%;" />
            </div>
             
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Registration form</h3>
                

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input required="fname" autofocus="fname" type="text" value="<?php echo $row['Fname']; ?>"id="fname" class="form-control form-control-lg" name="fname" />
                      <label class="form-label" for="fname">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input required="lname" type="text" id="lname"value="<?php echo $row['Lname']; ?>" class="form-control form-control-lg" name="lname"/>
                      <label class="form-label" for="lname">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input required="contact" maxlength="10" value="<?php echo $row['Contact']; ?>"  type="text" id="contact" class="form-control form-control-lg" name="contact"/>
                      <label class="form-label" for="contact">Contact No.</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input required="faname"type="text" value="<?php echo $row['Faname']; ?>" id="faname" class="form-control form-control-lg" name="faname"/>
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>
                 <div class="form-outline mb-4">
                     <input required="email" type="email"value="<?php echo $row['Email']; ?>" id="email" class="form-control form-control-lg" name="email"/>
                 
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>
                 <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input required="password" value="<?php echo $row['Password']; ?>" maxlength="8" type="text" id="password" class="form-control form-control-lg" name="password"/>
                      <label class="form-label" for="form3Example1m1">Password</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input maxlength="8" type="text"  value="<?php echo $row['Password']; ?>" id="repassword" required="repassword"class="form-control form-control-lg" name="repassword"/>
                      <label class="form-label" for="form3Example1n1">Re-Password</label>
                    </div>
                  </div>
                </div>
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                    <h6 class="mb-0 me-4" style="margin-inline-end: 8px; margin-block-start: -3px;">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                      <input required="gender" class="form-check-input" type="radio" <?php echo ($row['gender']=='0')?'checked':'' ?> name="gender" id="femaleGender"
                      value="0"  />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" <?php echo ($row['gender']=='1')?'checked':'' ?> id="maleGender"
                      value="1" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender" <?php echo ($row['gender']=='2')?'checked':'' ?> 
                      value="2" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
                <div class="form-outline mb-4">
                    <input required="address"value="<?php echo $row['Addresh']; ?>" type="text" id="form3Example8" class="form-control form-control-lg" name="address" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">

                     <input required="state"value="<?php echo $row['State']; ?>" type="text" id="form3Example8" class="form-control form-control-lg" name="state" />
                  <label class="form-label" for="form3Example8">state</label>
                  </div>
                  <div class="col-md-6 mb-4"  >
                     <input required="city" value="<?php echo $row['city']; ?>"type="text" id="form3Example8" class="form-control form-control-lg" name="city" />
                  <label class="form-label" for="form3Example8">city</label>
                  </div>
                </div>

                <div class="form-outline mb-4">
                    <input required="pincode" value="<?php echo $row['Pincode']; ?>"type="text" id="pincode" class="form-control form-control-lg" name="pincode" />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>
               


                <div class="d-flex justify-content-end pt-3" style="margin-right: 30%;">
                    <button type="" onclick="clearTimeout()" class="btn btn-light btn-lg" style="margin-right: 9%;">Reset all</button>
                    <input type="submit" class="btn btn-warning btn-lg ms-2" name="register" value="Register">
                </div>
                   <div class="form-outline mb-4">
                       <label class="form-label" for="form3Example90" style="    position: absolute;left: 34%; margin-block-start: 24px;">Alrady User? <span><a href="login.html">Login</a></span></label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </form>

</section>
    <script>
        function validate(){
        let x= document.getElementById("repassword");
         let y= document.getElementById("password");
         
         if( x.value == y.value ){
            
             return false;
         }else{
             alert("Password & re-password is not match");
             x.focus();
             return false;
         }
     }
     function register(){
         var a=
     }
    </script>
        
    </body>
   
<?php include './footer.php';?>
    
    

