<?php
session_start();
if (isset($_COOKIE['user_id'])) {
    $_SESSION['id'] = $_COOKIE['user_id'];
    header('Location: start.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
/* Common styles */
html{
    touch-action:none;
}
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #FFFF;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden;
}

h2 {
    margin-left: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    background: #FFFF;
    overflow: hidden;
}

.login-container {
    padding: 30px;
    background-color: white;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
    border-radius: 80px 20px 80px 20px;
    width: 100%;
    margin-left: 10px;
    margin-right: 10px;
    max-width: 400px;
    box-sizing: border-box;
    margin-top: 80px;
}

.login-container h2 {
    text-align: center;
    margin-bottom: 50px;
    font-size: 28px;
    color: #333;
}

.login-container .form-group {
    margin-bottom: 25px;
}

.login-container input[type="text"], 
.login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    border-bottom: 1px solid black;
    font-size: 20px;
    border-right: 0;
    border-left: 0;
    border-top: 0;
    color: #333;
}
.login-container input[type="text"]:focus {
            outline: none;
        }
        .login-container input[type="password"]:focus {
            outline: none;
        }

.login-container .remember-me {
    display: flex;
    align-items: center;
    visibility: hidden;
}

.login-container .remember-me input[type="checkbox"] {
    margin-right: 10px;
}

.login-container button[type="submit"] {
    padding: 10px 80px;
    background-color: #fdca54;
    color: #ffffff;
    border-radius: 30px;
    cursor: pointer;
    font-size: 22px;
    display: flex;
    justify-content: center;
    border: none;
    margin: 0 auto;
}

.login-container .new-user {
    background-color: transparent;
    color: #333;
    cursor: pointer;
    font-size: 15px;
    display: flex;
    justify-content: center;
    margin: 30px auto 20px;
    border: none;
    text-decoration: underline;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
}

.login-container .error-message {
    color: red;
    text-align: center;
    font-size: 12px;
}

header {
    background-color: #fdca54;
    color: #FFFF;
    top: 0;
    height: 100px ;
    font-size: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 600;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
}
</style>
<header>TALASALITAAN</header>
<body>
    <div class="container">
        <div class="login-container">
            <h2>Login</h2>
            <form id="login-form" action="sql_login.php" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="Username" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password" placeholder="Password" name="password" required>
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember-me" name="remember_me">
                    <label for="remember-me">Remember Me</label>
                </div>
                <button type="submit">Magsimula</button>
                <button type="button" class="new-user" onclick="window.location.href='signup.php'">Wala pang rekord</button>
            </form>

            <?php if(isset($_SESSION['login_error'])): ?>
                <center><span class="error-message"><?php echo $_SESSION['login_error']; ?></span></center>
                <?php unset($_SESSION['login_error']); ?>
            <?php endif; ?>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('remember-me').checked = true;
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
    if (disclaimer){
        disclaimer.remove();
    }
});
    </script>
</body>
</html>
