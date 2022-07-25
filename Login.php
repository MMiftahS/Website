<!DOCTYPE html>
<html>
    <head>
        <title>Login FOrm Design</title>
        <link rel="stylesheet" type="text/css"  href="css/style2.css">
    </head>

    <body>
        <div class="login-box">
            <div class="logo">
            <h1>Login</h1>
            <form ACTION="process.php" METHOD="POST" NAME="input">
                <input type="text" name="Username" placeholder="Enter Username">
                <p>Password</p>
                <input type="Password" name="Password" placeholder="Enter Password">
                <input type="submit" name="submit" value="Login">
                <a href="#">Forget Password</a>
            </form>
        </div>
    </body>
</html>