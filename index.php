<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post"> 
        <h2>LOG-IN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>UserName</label>
        <input type="text" name="uname" placeholder="UserName"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <a href="signup.php">SIGNUP</a>

        <button type="submit">Login</button>
    </form>
</body>
</html>