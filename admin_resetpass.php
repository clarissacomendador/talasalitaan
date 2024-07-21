<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin _ Reset Pass</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<style>
/* Common styles */
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
}

.login-container {
    padding: 60px;
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
    margin-top: 40px;
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
<?php
session_start();
?>
<header>
    TALASALITAAN 
    <button class='btn btn-danger' onclick="location.href='sql_logout.php'">Logout</button>

</header>

<body>
    <div class="container">
        <div class="login-container">
            <h2>Password Reset</h2>
            <?php
            $idp = isset($_GET["id"]) ? $_GET["id"] : "";
            ?>
            <form id="login-form" action="sql_resetpass.php" method="POST">
    <div class="form-group">
        <input type="password" placeholder="Enter new password" id="password" name="password" required>
    </div>
    <div class="form-group">
        <input type="password" placeholder="Confirm password" id="confirmpassword" name="confirmpassword" required>
    </div>
    <input type="hidden" name="userId" value="<?php echo $idp ?>">
    <button type="submit">Reset</button>
</form>

        </div>
    </div>
</body>
</html>
