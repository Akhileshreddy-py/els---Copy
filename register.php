<?php
$fname=$_GET["fullName"];
$email=$_GET["email"];
$password=$_GET["password"];
$cpassword=$_GET["cpassword"];
echo $fname;
echo $email;
echo $password;
echo $cpassword;

$dbcon=mysqli_connect("localhost","root","","ELS");
if($dbcon)
{
    echo "success";
    $q="insert into students values('$fname','$email','$password')";
    echo $q;
    $res=mysqli_query($dbcon,$q);
    if($res)
    {
        echo "inserted success full";

    }
    else{
        echo " inserted is failed ";
    }
}
else
{
    echo "failed";
}



?>