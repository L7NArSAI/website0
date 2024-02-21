<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <center>SWAP NUMBERS</center>
    </h1>
    <form method="post">
        number 1:<input type="text" name="t1" id="">
        number 2:<input type="text" name="t2" id="">
        <input type="submit" value="SUBMT">
    </form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$temp;

echo "BEFORE SWAPIING a and b are: ".$a." ". $b;
$temp=$a;
$a=$b;
$b=$temp;
echo "<br>AFTER SWAPIING a and b are: ".$a." ". $b;

?>