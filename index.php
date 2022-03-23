<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="heading">
            <h1>WELCOME TO MY PAGE</h1>
        </div>
        <div class="log">
        <form action="welcome.php" method="POST">
            <table align="center">
                <tr>
                    <th colspan="2"><h2>Login</h2></th>
                </tr>
                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="pwd"></td>
                </tr>
                <tr>
                    <td id="sub" colspan="2"><input type="submit" name="login" value="login"></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>