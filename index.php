<?php
$Firstname=$_REQUEST['firstname'];
$Lastname=$_REQUEST['lastname'];
$Email=$_REQUEST['email'];
$MobileNo =$_REQUEST['mobil no'];
$Address=$_REQUEST['Address'];
$Gender=$_REQUEST['gender'];
$Birthday=$_REQUEST['birth'];
$Hobbies=$_REQUEST['hobby'];

if(isset($_POST['send']))
{

    $host="localhost";
    $user="root";
    $password="";
    $db="kindergarten";

   $conn = mysqli_connect($host,$user,$password,$db);

   $insert="insert into contact values('$Firstname','$Lastname','$Email','$Mobile','$Address','$Gender','$Birthday','$Hobbies')";
   mysqli_query($conn,$insert);
   if($conn){

    echo("<h1 style; 'color:green';>your form is done!</h1>");

   }
else{
    echo("<h1 style='color:red';>your form is failed!</h1>"); 
}

}

?>

