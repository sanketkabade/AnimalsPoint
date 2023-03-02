
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

<body style="background-image: url('assets/images/back.jpg'); height: ">
    
     <section class="h-100 ">
         <form action="#" method="post" onsubmit="validate()" name="registraction">
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
                        <input required="fname" autofocus="fname" type="text" id="fname" class="form-control form-control-lg" name="fname" />
                      <label class="form-label" for="fname">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input required="lname" type="text" id="lname" class="form-control form-control-lg" name="lname"/>
                      <label class="form-label" for="lname">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input required="contact" maxlength="10"  type="text" id="contact" class="form-control form-control-lg" name="contact"/>
                      <label class="form-label" for="contact">Contact No.</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input required="faname"type="text" id="faname" class="form-control form-control-lg" name="faname"/>
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>
                 <div class="form-outline mb-4">
                     <input required="email" type="email" id="email" class="form-control form-control-lg" name="email"/>
                 
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>
                 <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input required="password" maxlength="8" type="text" id="password" class="form-control form-control-lg" name="password"/>
                      <label class="form-label" for="form3Example1m1">Password</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input maxlength="8" type="text" id="repassword" required="repassword"class="form-control form-control-lg" name="repassword"/>
                      <label class="form-label" for="form3Example1n1">Re-Password</label>
                    </div>
                  </div>
                </div>
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                    <h6 class="mb-0 me-4" style="margin-inline-end: 8px; margin-block-start: -3px;">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                      <input required="gender"  class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="0" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="1" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="2" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
                <div class="form-outline mb-4">
                    <input required="address" type="text" id="form3Example8" class="form-control form-control-lg" name="address" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>
                

                

                <div class="row">
                  <div class="col-md-6 mb-4">

<!--                      <select required="state" class="select" name="state">
                      <option value="State">State</option>
                      <option value="Maharashtra"  >Maharashtra</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Gujarat">Gujarat</option>
                    </select>-->
                      
                     <input required="state" type="text" id="form3Example8" class="form-control form-control-lg" name="state" />
                  <label class="form-label" for="form3Example8">state</label>
                  </div>
                  <div class="col-md-6 mb-4"  >

<!--                      <select required="city"class="select" name="city">
                      <option value="sangli">Sangli</option>
                      <option value="Miraj">Miraj</option>
                      <option value="Kolhapur">Kolhapur</option>
                      <option value="Pune">Pune</option>
                      
                    
                    </select>-->
                      
                     <input required="city" type="text" id="form3Example8" class="form-control form-control-lg" name="city" />
                  <label class="form-label" for="form3Example8">city</label>
                  </div>
                </div>

                <div class="form-outline mb-4">
                    <input required="pincode" type="text" id="pincode" class="form-control form-control-lg" name="pincode" />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>
               


                <div class="d-flex justify-content-end pt-3" style="margin-right: 30%;">
                    <button type="" onclick="clearTimeout()" class="btn btn-light btn-lg" style="margin-right: 9%;">Reset all</button>
                    <input type="submit" onclick=""class="btn btn-warning btn-lg ms-2" name="register" value="register1">
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
         var password=document.myform.password.value;  
  
if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }
     }
 }  
</script> 
    </script>
        
    </body>
   
<?php include './footer.php';?>

<?php include './admin/Db_connection.php';

         
           //datebase connection
             $conn = new mysqli('localhost','root','','animals_point');
            if($con ->connect_error){
                die('connection Failed :'.$conn->connect_error);
            }  else {
                                  $smtp=$con->prepare("INSERT INTO registration (`Fname`,`Lname`,`Faname`,`Contact`,`Email`,`Password`,`gender`,`Addresh`,`State`,`city`,`Pincode`) values(?,?,?,?,?,?,?,?,?,?,?)"); 
                                  $smtp->bind_param("sssissssssi", $_POST['fname'],$_POST['lname'],$_POST['faname'],$_POST['contact'],$_POST['email'],$_POST['password'],$_POST['gender'],$_POST['address'],$_POST['state'],$_POST['city'],$_POST['pincode']);
                 
                 $smtp->execute();

                $smtp->close();
                $con->close();
exit();
               
                   }
  
?>

  
<!--//  $firstName= $_POST['fname'];
//  $lastName= $_POST['lname'];
//  $fatherName= $_POST['faname'];
//  $contact= $_POST['contact'];
//  $email= $_POST['email'];
//  $password= $_POST['password'];
//  $gender= $_POST['gender'];
//  $addresh= $_POST['address'];
//  $state= $_POST['state'];
//   $city= $_POST['city'];
//  $pincode= $_POST['pincode'];
//         
// $query="INSERT INTO registration (Fname,Lname,Faname,Contact,Email,Password,gender,Addresh,State,city,Pincode)values('$firstName','$lastName','$fatherName',$contact,'$email','$password','$gender','$addresh','$state','$city',$pincode)";
// $result1= mysqli_query($con, $query);
// 
//  if ($con->query($query) === TRUE) {
//  echo "<script> alert('Record deleted successfully')</script>";
//  exit(header("Location: /login.php"));
//} else {
//  echo "Error deleting record: " . $conn->error;
//}
//    
//-->

