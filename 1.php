<?php
echo "<h1><CENTER>REGISTRATION FORM<CENTER></h1>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="1.css?v=<?php echo time();?>">
</head>
<body>
    <form action="2.php" name="form1" onsubmit=validate() method="post">
        <center>
        <table>
            <tr>
               <td>
                 username <input type="text" id="name" name="name">
               </td>
            </tr>
            <tr>
                <td>
                password <input type="password"  id="pw1">
                </td>
            </tr>
                <tr>
                    <td>
                        confirm password <input type="password" id="pw2">
                    </td>
                </tr>
                <tr>
                    <td> State <select id="country" name="country">
                            <option value="GUJARAT">GUJARAT</option>
                            <option value="MP">MP</option>
                            <option value="UP">UP</option>
                            <option value="GOA">GOA</option>
                            <option value="RAJASTHAN">RAJASTHAN</option>
                            <option value="MAHARSHTRA">MAHARASHTRA</option>
                            <option value="ASSAM">ASSAM</option>
                            <option value="J&K">J&K</option>
                            <option value="PUNJAB">PUNJAB</option>
                            <option value="HARYANA">HARYANA</option>
                            <option value="HP">HP</option>
                            <option value="UK">UK</option>
                            <option value="BIHAR">BIHAR</option>
                            <option value="SIKKIM">SIKKIM</option>
                            <option value="JHATKHAND">JHARKHAND</option>
                            <option value="WB">WB</option>
                            <option value="AP">AP</option>
                            <option value="Y">TELENGANA</option>
                            <option value="KARNATAKA">KARNATAKA</option>
                            <option value="TN">TN</option>
                            <option value="KERELA">KERELA</option>
                            <option value="ODISHA">ODISHA</option>
                            <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                            <option value="NAGALAND">NAGALAND</option>
                            <option value="MIZORAM">MIZORAM</option>
                            <option value="MANIPUR">MANIPUR</option>
                            <option value="TRIPURA">TRIPURA</option>
                            <option value="MEGHALAYA">MEGHALAYA</option>
                        </select>                    </td>
                </tr>
                <tr>
                    <td>
                        Address <textarea name="txt" id="txt" cols="15" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Number <input type="TEXT" pattern="[0-9]{10}" required name="number">
                    </td>
                </tr>
                <tr>
                    <td>
                         <input type="submit">
                    </td>
                </tr>
</center>
            
   
    </table>
    </form>
   
</body>
</html>
<script>
    function validate()
    {
        let a=document.forms["form1"]["pw1"].value;
        let b=document.forms["form1"]["pw2"].value;
        let c=document.forms["form1"]["name"].value;
        let d=document.forms["form1"]["txt"].value;

        if(a!=b)
        {
            alert("Password mismatch");
        }
        else if(c=="")
        {
            alert("Enter username");
        }
        else if(d=="")
        {
            alert("Enter address");
        }
        else
        {
            alert("Sumited");
        }
    }
</script>





