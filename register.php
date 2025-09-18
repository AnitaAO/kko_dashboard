<?php session_start()?>
<!DOCTYPE html>
<html>
    <head>
        <!-- <title>Welcome To OKK</title> -->
         <link rel="stylesheet" href="css/register.css">
    </head>
    <body>
        <div class="container">
            <h1>Welcome to OKK</h1>

            <h2>Register</h2>
            <h4>Please fill in the information below to create an account</h4>
            <form method="post" action="register_logic.php">
                <label>Name</label><br>
                <input type="text" name="name" required><br><br>

                <label>Email</label><br>
                <input type="email" name="email" required><br><br>

                <label>Password</label><br>
                <input type="password" name="password" required><br><br>

                <button type="submit">Register</button>
            </form>
            <p>
                <?php if (isset($_SESSION["message"])) {
                    echo $_SESSION["message"];
                    unset($_SESSION["message"]);
                }
                ?>
            </p>
        </div>

    </body>
</html>