<?php
$con=mysqli_connect("localhost","root","","info_51");

if(mysqli_connect_error())
{
    echo "Error in connection due to".mysqli_connect_error();
}
else
{echo "Connection to datbase is Succesful";}

$name=$_POST["name"];
$number=$_POST["number"];
$sid=$_POST["sid"];
$enrollnum=$_POST["enrllnumber"];
$gender=$_POST["gender"];
$hobby=$_POST["hob"];
$d="";
foreach($hobby as $h){
    $d.=$h.",";
}

$x="INSERT INTO information_51(name,number,stud_id,enrll_id,gender,hobby) values ('$name','$number','$sid','$enrollnum','$gender','$d')";
if(mysqli_query($con,$x)){
    echo "<br>New record ";
}
else{
    echo "Not recorded";
}
?>