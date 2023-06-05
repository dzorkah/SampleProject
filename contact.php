<?php
$Full_Name=$_POST['Full_Name'];
$email=$_POST['email'];
$tel=$_POST['telephone'];
$service=$_POST['service'];
$number=$_POST['number'];
$datetime_local=$_POST['datetime_local'];

$conn=new mysqli('localhost','root','','tourism');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into tbtourism(Full_Name,email,telephone,service,number,datetime_local)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$Full_Name,$email,$tel,$service,$number,$datetime_local);
    $stmt->execute();
    echo("Registeration Successful...");
    $stmt->close();
    $conn->close();
}
?>