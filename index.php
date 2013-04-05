<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Social Music</title>
    </head>
    <body>
        <a href="artists.php">Artists </a>
        <fieldset>
            <legend>Login</legend>
            <table>
                <form action="scripts/login.php" method="POST"/>
                    <tr><td>Email:</td><td><input type="email" name="email"/></td></tr>
                    <tr><td>Password:</td><td><input type="password" name="password"/></td></tr>
                    <tr><td></td><td><a href="register.php">Register</a></td></tr>
                    <tr><td></td><td><input type="submit" value="Login"/></td></tr>
                </form>
            </table>
        </fieldset>
    </body>
</html>
