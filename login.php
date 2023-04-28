<!DOCTYPE html>
<html>
<head>
    <title>BRGY 48 SYSTEM LOGIN</title>
    <link rel="stylesheet" type=text/css href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <h2>BRGY 48 SYSTEM LOGIN</h2>
        <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input type ="text" name="username" placeholder="username"><br>

        <label>Password</label>
        <input type ="password" name="password" placeholder="password"><br>

        <button type ="submit">Login</button>
    </form>
</body>
</html>