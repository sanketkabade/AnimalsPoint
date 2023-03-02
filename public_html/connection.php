

<?php
  

      
//      
//  $firstName= $_POST['fname'];
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
             
             
             //datebase connection
             $conn = new mysqli('localhost','root','','animals_point');
             if($conn ->connect_error){
                 die('connection Failed :'.$conn->connect_error);
             }  else {
//                 $smtp=$conn->prepare("INSERT INTO registration (`First name`,`Last name`,`Father name`,`Contact`,`Email`,`Password`,`gender`,`Addresh`,`State`,`city`,`Pincode`) values(?,?,?,?,?,?,?,?,?,?,?)");
//                 $smtp->bind_param("sssissssssi", $firstName,$lastName,$fatherName,$contact,$email,$_POST['password'],$gender,$addresh,$state,$city,$Pincode);
//                 $smtp->execute();
//                 echo 'registration successful';
//                 $smtp->close();
//                 $conn->close();
                
                 
                    }


?>
