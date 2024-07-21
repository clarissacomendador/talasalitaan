<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Sign-up Page</title>
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
   /*   background: #fdca54;*/
  background: #FFFF;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden;
    padding: 0;
}

h2{
    margin-left: 0;
}
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
 /* background: #fdca54;*/
      background: #FFFF;
}
.login-container {
    padding: 60px;
    background-color: white;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
   /* border-radius: 30px; */
   border-radius: 80px 20px 80px 20px;
    width: 100%;
    margin-left: 10px;
    margin-right: 10px;
    max-width: 400px;
    box-sizing: border-box;
    margin-top: 40px;;
}
.login-container h2 {
  /*  text-align: center;
    margin-bottom: 50px;
    font-size: 20px;
    color: #333;*/

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
   /* width: 100%;
    padding: 10px;
    border-bottom: 1px solid black;
    font-size: 20px;
    border-right: 0;
    border-left: 0;
    border-top: 0;
    color: #333;*/

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
 /*   padding: 5px 10px;
    background-color: transparent;
    color: #333;
    border-radius: 5px;
    cursor: pointer;
    font-size: 20px;
    display: flex;
    justify-content: center;
    margin: 0 auto;*/

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
    margin: 30px auto 20PX;
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
/* Modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0 20px;
    border: 1px solid #888;
    width: 100%;
    height: 100%;
    overflow: hidden;
}


.close {
    color: #333;
    font-size: 15px;
    font-weight: bold;
    text-align: center;
    text-decoration: underline;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
}
#new-user-form h2 {
    text-align: center;
    margin-left: 20px;
    overflow: hidden;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 40px;
    margin-bottom: 10px;
    color: #333;
}
#new-user-form input {
    font-size: 20px;
    overflow: hidden;
    margin-top: 20px;
    font-family: Arial, Helvetica, sans-serif;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid black;
    padding: 10px;
}
#new-user-form input:focus {
    outline: none;
}
#new-user-form {
    text-align: center;
    position: relative;
    top: 20%;
    left: 37%;
    padding: 60px 10px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
    border-radius: 80px 20px 80px 20px;
    width: 25%;
}
@media only screen and (max-width: 800px) {
    #new-user-form {
    text-align: center;
    position: relative;
    top: 20%;
    left: 0;
    padding: 30px 10px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
    border-radius: 80px 20px 80px 20px;
    width: 100%;
}
}

.new-user {
    padding: 10px 20px;
    font-size: 16px;
}
#new-user-form button {
    font-size: 20px;
    background: #fdca54;
    padding: 10px 80px;
    border-radius: 30px;
    font-family: Arial, Helvetica, sans-serif;
    margin: 25px 0;
    color: white;
    border: none;
}

header{
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
    <div class="modal-content">
    
    <form id="new-user-form" action="sql_signup.php" method="POST">
    <h2>Signup</h2>
    <div class="form-group">
                    <input type="text" placeholder="Pangalan" id="name" name="name" required>
                </div>
    <div class="form-group">
                    <input type="text" placeholder="Username" id="new-username" name="username" required>
                </div>
        <div class="form-group">
                    <input type="password" id="new-password" placeholder="Password" name="password" required>
                </div>
        <button type="submit">Magsimula</button><br>
        <a href="login.php" class="close">May rekord na</a>
    </form>
</div>

    </div>
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