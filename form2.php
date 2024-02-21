<?php

$nerror=$eerror=$perror=$pierror=$numerror="";
$name=$email=$password=$pincode=$number="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty($_POST['n1']))
{
    $nerror="Enter Name";
}
else if(!preg_match("/^[a-zA-Z-']*$/",$_POST['n1'])){
    $nerror="only alphabets is allowed";

}
else{
    $name=$_POST['n1'];
}
if(empty($_POST['n2']))
{
    $eerror="Enter email";
}
else if(!filter_var($_POST['n2'],FILTER_VALIDATE_EMAIL)){
    $eerror="write email in proper format";
}
else{
    $email=$_POST['n2'];
}
if(empty($_POST['n3']))
{
    $perror="Enter passworrd";
}
else if(!preg_match("/[a-zA-Z0-9]/") && strlen($_POST['n3'])!=6)
{
    $perror="Password length should be 6";
}
else{
    $password=$_POST['n3'];
}
if(empty($_POST['n4']))
{
    $pierror="Enter pincode";
}
else if(strlen($_POST['n4'])!=6){
    $pierror="Pincode length shoud be 6";
}
else{
    $pincode=$_POST['n4'];
}
if(empty($_POST['n5']))
{
    $numerror="Enter number";
}
else if(strlen($_POST['n5'])!=10){
    $numerror="number length should be 10";
}
else{
    $number=$_POST['n5'];
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color : red;
        }
        
    </style>
</head>
<body>
<form action="" method="post">
    <h1>
        <center>
            REGISTRATION FORM
        </center>
    </h1>
    <span><center>* indicates required fields</center><br></span>
    <center>
        <table>
            <tr>
                <td>Name :<input type="text" name="n1" value="<?php echo $name; ?>"><span>*<?php echo $nerror; ?></td></span>
                <td><br></td>
            </tr>
            <tr>
                <td>E-mail :<input type="TEXT" name="n2" value="<?php echo $email; ?>"><span>*<?php echo $eerror; ?></td></span>
                <td><br></td> 
            </tr>
            <tr>
                <td>password :<input type="password" name="n3" value="<?php echo $password; ?>"><span>*<?php echo $perror; ?></td></span>
                <td><br></td>
            </tr>
            <tr>
                <td>pincode :<input type="number" name="n4" value="<?php echo $pincode; ?>"><span>*<?php echo $pierror; ?></td></span>
                <td><br></td>
            </tr>
            <tr>
                <td>Number :<input type="number" name="n5" value="<?php echo $number; ?>"><span>*<?php echo $numerror; ?></td></span>
                <td><br></td>
            </tr>
            <tr>
                <td><input type="submit" name="n6"></td>
                <td><br></td>
            </tr>
        </table>
    </center>
</form>
    
</body>
</html>
