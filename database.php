<?php

$con=mysqli_connect('localhost','root');
if($con){
    echo"Connection success";
}
else
    echo "no connection";

mysqli_select_db($con,'website');

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$city=$_POST['city'];


$query="insert into contact(name,phone,email,aadhar,city) values('$name','$phone','$email','$aadhar','$city')";

mysqli_query($con,$query);

header('location:index.html');



?>