<?php
$FullName=$_POST['FullName'];
$Email=$_POST['Email'];
$Message=$_POST['message'];

$conn=new mysqli('localhost','root','','tourism');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into comment(FullName,Email,message)
    values(?,?,?)");
    $stmt->bind_param("sss",$FullName,$Email,$Message);
    $stmt->execute();
    echo("Registeration Successful...");
    $stmt->close();
    $conn->close();
}
?>