<?php  

session_start();
//header('location:login.php');
//$con="select * from sign_up where usertype='$usert'";

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'usersignup');
$usert=$_POST['usertype'];
$name=$_POST['user'];
$pass=$_POST['password'];
$sql="select * from sign_up where name='$name'&& password='$pass'";


$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num==1 && $usert='general'){
    $_SESSION['username']=$name;
   header('location:home.php');
}
elseif($num==1 && $usert='hospital'){
    header('location:hosptalform.php');
}
else{
    header('location:login.php');
    
}
?>