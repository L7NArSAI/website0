<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <h1>FIBONACCI SERIES</h1>
    </center>
    <form method="POST">
       INPUT VALUE: <input type="number" name="t1" id="">
    </form>
</body>
</html>
<?php
$a =0;
$b =1;
$n=1;
$u=$_POST["t1"];
$sum=0;
echo "SERIES ";
while($n<=$u)
{
    $sum=$sum+$a;
    echo $sum." ";
    $a=$b;
    $b=$sum;
    $n++;
}

?>