<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <form action="select.php" method="post">
            <div id="usernameAndPass">
                <label for="username">Username : </label>
                <input type="text" id="username" name="username">
                <br><br>
                <label for="password">Password : </label>
                <input type="password" id="password" name="password">
                <br><br><br>
                <button type="submit" name="submit">Login</button>
                <h2>Known Bugs / flaws : if you entered the wrong credentials, it doesn't tell you what's wrong, entering select.php redirects you to index.php again</h2>
            </div>
        </form>
    </body>
</html>