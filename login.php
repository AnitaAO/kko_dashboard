<!DOCTYPE html>
<html>
    <head>
        <!-- <title>Welcome back!</title> -->
         <link rel="stylesheet" href="css/login.css">
    </head>
    <h1>Welcome back</h1>
    <h4>Enter your login details to continue</h4>
    <body>
        <form method="POST" action="login_logic.php">
            <label>Email</label>
            <input type="email" name="email"><br>

            <label>Password</label>
            <input type="password" name="password"><br>

            <button type="submit">Login</button>
        </form>

        <p><?php if (isset($_SESSION["message"])) {echo $_SESSION["message"];
        unset($_SESSION["message"]);
        }?></p>
    </body>
</html>