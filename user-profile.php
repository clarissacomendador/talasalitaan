<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f6dcf461c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet"/>
    <title>Popup Modal with Carousel Slider</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
            touch-action:none;
        }

        header {
            width: 100%;
            background-color: #fdca54;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 30px;
            position: fixed;
            top: 0;
            z-index: 1000;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            padding-top: 90px; /* To account for the fixed header */
            box-sizing: border-box;
        }
        #nav-list {
            list-style: none;
            overflow: hidden;
            background-color:#ffff;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding:0;
            display: flex;
            justify-content: center;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
            z-index: 1;
        }

        #nav-list a {
            color: #BBBBBB;
            font-size: 16px;
            margin-right: 30px;
            margin-left: 30px;
            font-weight: bold;
            text-decoration: none;
        }

        #nav-list li {
            display: inline;
            float: left;
            padding: 0 20px;
        }

        #nav-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #nav-list i {
            color: #BBBBBB;
            padding: 10px 0;
            display: flex;
            justify-content: center;
        }

        .profile-image {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            background-color: #e9e9e9;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-image .fa-user {
            font-size: 50px;
            color: #333;
        }

        .profile-info {
            text-align: center;
        }

        .profile-info h2 {
            font-size: 24px;
            margin: 5px 0;
            font-weight: 600;
            text-transform: uppercase;
            color: #333;
        }

        .profile-info h3 {
            font-size: 20px;
            color: #333;
        }

        /*.disclaimer-button,*/
        .logout-button {
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 10px;
            background-color: transparent;
            color: #fdca54;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #fdca54;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .disclaimer-button{
            display: none;
        }

        .fa-circle-info, .fa-arrow-right-from-bracket {
            margin-right: 10px;
        }

        #info .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        #info .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            max-width: 90%;
            width: 400px;
        }

        #info .close-modal {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 25px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .profile-info h2 {
                font-size: 25px;
            }

            .profile-info h3 {
                font-size: 18px;
            }

            .disclaimer-button,
            .logout-button {
                font-size: 16px;
                padding: 8px 16px;
            }

            .fa-circle-info,
            .fa-arrow-right-from-bracket {
                margin-right: 5px;
            }
        }
        #password-reset-form {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #00000080;
            z-index: 1000;
        }
        .login-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 10px 5px 10px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            margin: 0 auto;
            position: relative;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-bottom: 1px solid #333;
        }
        .form-group input:focus {
            outline: none;
            border: none;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #fdca54;
            color: white;
            border: none;
            font-size: 15px;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px 0;
        }
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #333;
        }
        .btn-reset {
            color: #fdca54;
            background-color: transparent;
            border: 2px solid #fdca54;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .login-container h2 {
            color: #333;
        }
        #disclaimer-button, .logout-button {
            margin: 10px auto;
        }
    </style>
</head>
<body>
<header id="profile-homepage">Talasalitaan</header>
<div class="container">
    <?php
    include('session.php');
    ?>
    <div class="profile-image"><i class="fa-solid fa-user"></i></div>
    <div class="profile-info">
        <?php echo '<h2>' . $name . '</h2>'; ?>
        <?php echo '<h3>@' . $username . '</h3>'; ?>
    </div>

    <button id="disclaimer-button" class="disclaimer-button"><i class="fa-solid fa-circle-info"></i>Pinagbatayan</button>

    <button id="show-form-button" class="btn-reset">Reset Password</button>

    <!-- Password reset form -->
    <div id="password-reset-form" style="display: none;">
        <div class="login-container">
            <button class="close-button" id="close-form-button">&times;</button>
            <h2>Password Reset</h2>
            <form id="login-form" action="user_resetpass.php" method="POST">
                <div class="form-group">
                    <input type="password" id="newpassword" name="newpassword" placeholder="Enter new password" required />
                </div>
                <div class="form-group">
                    <input type="password" id="confirmnewpassword" name="confirmnewpassword" placeholder="Confirm new password" required />
                </div>
                <button type="submit">Reset Password</button>
            </form>
        </div>
    </div>
    
    <a href="sql_logout.php" style="text-decoration: none">
        <button class="logout-button"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</button>
    </a>
</div>

<div id="info">
    <div id="info-modal" class="modal">
        <div class="modal-content">
            <span id="close-modal" class="close-modal">&times;</span>
            <h4>Reperensya</h4>
            <p>Ortega, G. P., & Pamaos, R. (2020). FilipinoTek3: Teksto, Wika, at Teknolohiya (Unang Edisyon)</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("info-modal");
    var btn = document.getElementById("disclaimer-button");
    var closeBtn = document.getElementById("close-modal");

    btn.onclick = function () {
        modal.style.display = "flex";
    }

    closeBtn.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

$(document).ready(function(){
    $('#show-form-button').on('click', function() {
        $('#password-reset-form').show();
    });

    $('#close-form-button').on('click', function() {
        $('#password-reset-form').hide();
    });
});
</script>
<section id="nav-list">
    <ul>
        <li><a href="start.php"><i class="fa-solid fa-house fa-lg"></i></a></li>
        <li><a href="searchpage.php"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a></li>
        <li><a href="quiz.php"><i class="fa-solid fa-gamepad fa-lg"></i></a></li>
        <li><a href="mechanics.php"><i class="fa-solid fa-question fa-lg"></i></a></li>
        <li><a href="user-profile.php"><i class="fa-solid fa-user fa-lg" style="color:#fdca54"></i></a></li>
    </ul>
</section>
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
