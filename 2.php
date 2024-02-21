<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP VAlidation</title>

    <link rel="stylesheet" href="2.css?v=<?php echo time();?>">
</head>
<body>
    <h1>
        <center>
            <bold>YOUR INFORMATION IS</bold>
        </center>
    </h1>
</body>
</html>
<?php
$a=$_POST['name'];
$b=$_POST['number'];
$c=$_POST['txt'];
$d=$_POST['country'];
echo "<center><table>";
echo "<tr><td>your name is: </td><td>".$a."</td></tr> <tr><td> your number is: </td><td>".$b." </td></tr><tr><td> your address is: </td><td>".$c." </td></tr><tr><td> your state is: </td><td>".$d."</td></tr>";
echo "</table>";
?>