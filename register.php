<?php
    include("includes/classes/Account.php");
    $account = new Account();
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Whodunnit</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. HerculePoirot" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
            </p>
            <button type="submit" name="loginButton">LOG IN</button>
        </form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <?php echo $account->getError("Your username must be between 4 and 25 characters"); ?>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. HerculePoirot" required>
            </p>
            <p>
                <?php echo $account->getError("Your emails don't match"); ?>
                <?php echo $account->getError("Email is invalid"); ?>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. hercule@ellezelles.com" required>
            </p>
            <p>
                <label for="email2">Confirm email</label>
                <input id="email2" name="email2" type="email" placeholder="e.g. hercule@ellezelles.com" required>
            </p>
            <p>
                <?php echo $account->getError("Your passwords don't match"); ?>
                <?php echo $account->getError("Your passwords can only contain numbers and letters"); ?>
                <?php echo $account->getError("Your password must be between 6 and 40 characters"); ?>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Your password" required>
            </p>
            <p>
                <label for="password2">Confirm password</label>
                <input id="password2" name="password2" type="password" placeholder="Your password again" required>
            </p>
            <button type="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>
</body>
</html>