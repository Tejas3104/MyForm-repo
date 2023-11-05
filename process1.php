<!DOCTYPE html>
<html>
<body>
<?php
 
if(isset($_POST['submit']))
{
   $fullname=$_POST['fullname'];
   $email=$_POST['emaal'];
   $gender=$_POST['male'];
   $city=$_POST['city'];

   $conn=new mysqli('localhost','root','','form');
   if($conn->connect_error)
   {
      die('connection failed : '.$conn->connect_error);

   }

   if($fullname!="" && $email!="" && $gender!="" && $city!="")
   {

      $namePattern ="/^[A-Za-z\s]+$/";
      $emailPattern = "/^\S+@\S+\.\S+$/";

      if(preg_match($namePattern,$fullname) && preg_match($emailPattern, $email))
   {

       $sql="INSERT INTO  Formdetails(Name,Email,Gender,City)values('$fullname','$email','$gender','$city')";

     if($conn->query($sql)===True)
     {
      echo "record added successfully";
     }
     else
     {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
   }
}
   else
   {
      echo "Please enter the data in all fields";
   }


   $conn->close();


} 





?>
</body>
</html>