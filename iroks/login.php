<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prijava</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header" style="background-color: #343A40">
    <h2>Log in</h2>
</div>

<form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" name="login" class="btn" style="background-color: #343A40">Log in</button>
    </div>

    <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>
</form>

</body>
</html>
