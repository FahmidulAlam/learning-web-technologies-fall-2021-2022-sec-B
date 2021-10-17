<!DOCTYPE html> 
<html> 
<head>    
</head>
<body>
 
<form method="post" action="login.php">
    <fieldset>
        <legend> <b> <font size="5px">Registration</font> </b> </legend>

        <table>
            <tr>
                <td >ID</td>
                <td><input type="text" name="id"/></td>
            </tr>

            <tr>
                <td>Password </td>
                <td><input type="password" name="password"/></td> <br>     
            </tr>

            <tr>
                <td>Confirm Password </td>
                <td><input type="password" name="confirmPassword"/></td> <br>     
            </tr>

            <tr>
                <td>Name</td>
                <td><input type="text" name="name"/></td> <br>     
            </tr>

            <tr>
                <td>User Type</td>
                <td> <input type="radio" name="userType" value=""> User
                <input type="radio" name="userType" value=""> Admin  </td>   
            </tr>
        </table>

        <br>
        <input type="submit" name="submit" value="submit"> <a href="signIn.php"> Sign In </a>
    </fieldset>
    
</form>
</body>
</html>