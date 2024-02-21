<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connectivity</title>
</head>
<body>
    <h1>
        <center>Registration form</center>
    </h1>
    <form action="formdb.php" method ="post"><center>
        <table>
        <tr>
               <td>
                 name <input type="text" name="name">
               </td>
            </tr>
            <tr>
                    <td>
                        Number <input type="TEXT" pattern="[0-9]{10}" required name="number">
                    </td>
                </tr>
                <tr>
                    <td>
                        student id <input type="TEXT" required name="sid">
                    </td>
                </tr>
                <tr>
                    <td>
                       enrollment number <input type="TEXT" required name="enrllnumber">
                    </td>
                </tr>
                <tr>
                    <td>
                        gender <input type="radio"  required name="gender" value="male">male
                                <input type="radio"  required name="gender" value="female">female
                        
                    </td>
                </tr>
                <tr>
                    <td>
              hobby  <input type="checkbox"  name="hob[]" value="reading">reading
                     <input type="checkbox"  name="hob[]" value="writing">writing
                     <input type="checkbox"  name="hob[]" value="playing">playing
                     </td>
                </tr>  
                <tr>
                    <td>
                        <input type="submit" name="submit">
                    </td>
                </tr>   
               
        </table>
        </center>
    </form>
    
</body>
</html>