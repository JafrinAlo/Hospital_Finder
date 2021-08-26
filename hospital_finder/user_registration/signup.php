<?php  

session_start();
//header('location:login.php');
//$con="select * from sign_up where usertype='$usert'";

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'usersignup');
$usert=$_POST['usertype'];
$name=$_POST['user'];
$pass=$_POST['password'];
$sql="select * from sign_up where name='$name'";


$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num==1){
    echo "Already have an account on this name";
}
else{
    $reg="insert into sign_up(name,password,usertype) values('$name','$pass','$usert')";

    mysqli_query($con,$reg);
    echo "Sign Up done!!";
}
?>