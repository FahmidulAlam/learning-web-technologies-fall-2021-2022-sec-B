<!DOCTYPE html> 
<html> 
<head>    
</head>
<body>
 
<form method="post" action="loginValidate.php">
    <fieldset>
        <legend> <b>Login</b> </legend>

        <table>
            <tr>
                <td > User Id   </td>
                <td><input type="text" name="userid"/></td>
            </tr>

            <tr>
                <td>Password </td>
                <td><input type="password" name="password"/></td> <br>     
            </tr>
        </table>

        <br>
        <input type="submit" name="submit" value="submit"> <a href="registration.php"> Register </a>
    </fieldset>
    
</form>
</body>
</html>