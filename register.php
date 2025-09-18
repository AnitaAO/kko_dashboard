<?php session_start()?>
<!DOCTYPE html>
<html>
    <head>
        <!-- <title>Welcome To OKK</title> -->
         <h1>Welcome to OKK</h1>
    </head>
    <body>
        <h2>Register</h2>
        <h4>Please fill in the information below to create an account</h4>
        <form method="post" action="register_logic.php">
            <label>Name</label>
            <input type="text" name="name" required><br>

            <label>Email</label><br>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required><br>

            <button type="submit">Register</button>
        </form>
        <p><?php if (isset($_SESSION["message"])) {echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }?></p>
    </body>
</html>