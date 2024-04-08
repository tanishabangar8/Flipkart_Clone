<?php
 session_start();
 header('Location:login.html');
 $con= mysqli_connect('localhost','root','Admin@123');
 if($con){
   echo "Connection Successfully";
 }
 else{
   echo "No Successfully";
 }
 mysqli_select_db($con,'flipkart-clone');
 $name= $_POST['email'];
 $pass= $_POST['password'];
 $quer= "Select * from user-data where username = '$name' && password= '$pass'";
 $result= mysqli_query($con, $quer);
 $num= mysqli_num_rows($result);
 if($sum==1)
 {
   echo "Duplicate Data";
 }
 else{
   $querr="insert into userdata(username, password) values('$name','$name')";
   mysqli_query($con,$querr);
 }
?>