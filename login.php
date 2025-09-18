<!DOCTYPE html>
<html>
    <head>
        <!-- <title>Welcome back!</title> -->
         <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container">

            <h1>Welcome back</h1>
            <h4>Enter your login details to continue</h4>


            <form method="POST" action="login_logic.php">
                <label>Email</label>
                <input type="email" name="email"><br><br>

                <label>Password</label>
                <input type="password" name="password"><br><br>

                <button type="submit">Login</button>
            </form>

            <p>
                <?php 
                session_start();
                if (isset($_SESSION["message"])) {
                    echo $_SESSION["message"];
                    unset($_SESSION["message"]);
                }
                ?>
            </p>
        </div>
    </body>
</html>