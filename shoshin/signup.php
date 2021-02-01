<?php
$server="localhost";
$username="root";
$password="";
$db="shoshin";
$conn=new mysqli($server,$username,$password,$db);
if($conn->connect_error){
  die("connection failed".$conn->connect_error);
}
$Fname=$_POST['firstname'];
$Lname=$_POST['lastname'];
$Email=$_POST['emailaddress'];
$pword=$_POST['password'];

$query="insert into signup values('$Fname','$Lname','$Email','$pword')";
if(mysqli_query($conn,$query)){
  echo "Record updated successfully";
  header('location:login.htm');
}else{
  echo "Error updating record".mysqli_error($conn);
}
?>
