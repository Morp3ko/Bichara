<!DOCTYPE html>
<html>
    <head>
        <title>..: Login :..</title>
</head>
<body>
    <form method="post" action="">
        <label>Username</label><br>
        <input type="type" name="userName"><br>
        <label>Password</label><br>
        <input type="password" name="userPass"><br>
        <input type="submit" name="submit" value="Submit">

        <?php

        $message = "";

        if (isset($_POST['submit']) ) {
            if ($_POST['userName'] === "Amir" &&
                $_POST['userPass'] === "123") {
                header("Location: Welcome.php");
                exit;
            } else {
                $message = "Login Failed.";
            }
        }
        ?>
        
<?php if ($message !="") { echo "<p>$message</p>"; } ?>

</form>
</body>
</html>

    