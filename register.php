<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sound music | Sign Up</title>
    </head>
    <body>
        <fieldset>
            <legend>Registration</legend>
                <form action="scripts/register.php" method="POST">
                <table>
                    <tr><td>Email:</td><td><input type="email" name="email"/></td></tr>
                    <tr><td>Password:</td><td><input type="password" value="" name="password"/></td></tr>
                    <tr><td>Repeat Password:</td><td><input type="password" value="" name="password2"/></td></tr>
                    <tr><td></td><td><input type="submit" value="Register" style="width: 100%;"/></td></tr>
                </table>
                </form>
        </fieldset>
    </body>
</html>
